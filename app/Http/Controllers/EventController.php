<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::with('user')->latest()->get();
        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.event.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'event_category' => 'required',
            'event_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();
        
        // স্লাগ তৈরি (SEO friendly URL)
        $data['slug'] = Str::slug($request->title) . '-' . time();

        // ইমেজ আপলোড
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/events'), $imageName);
            $data['image'] = 'uploads/events/'.$imageName;
        }

        Event::create($data);

        return redirect()->route('admin.event.index')->with('message', 'Event Created Successfully!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $users = User::all();
        return view('admin.event.edit', compact('event', 'users'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        
        $request->validate([
            'title' => 'required|string|max:255',
            'event_category' => 'required',
            'event_date' => 'required|date',
        ]);

        $data = $request->all();
        
        // টাইটেল চেঞ্জ হলে স্লাগও আপডেট হবে
        $data['slug'] = Str::slug($request->title) . '-' . time();

        if ($request->hasFile('image')) {
            if($event->image && file_exists(public_path($event->image))){
                unlink(public_path($event->image));
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/events'), $imageName);
            $data['image'] = 'uploads/events/'.$imageName;
        }

        $event->update($data);

        return redirect()->route('admin.event.index')->with('message', 'Event Updated Successfully!');
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);

        if($event->image && file_exists(public_path($event->image))){
            unlink(public_path($event->image));
        }

        $event->delete();

        return back()->with('message', 'Event Deleted Successfully!');
    }

    // ইভেন্টে জয়েন করার জন্য ছোট একটি মেথড
    public function joinEvent($eventId)
    {
        $event = Event::findOrFail($eventId);
        // ইউজার অলরেডি জয়েন করেছে কিনা চেক করে অ্যাটাচ করা
        $event->participants()->syncWithoutDetaching([auth()->id()]);
        
        return back()->with('message', 'Successfully joined the event!');
    }
}
