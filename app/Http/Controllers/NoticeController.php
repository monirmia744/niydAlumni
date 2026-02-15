<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\User;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index()
    {
        // ইগার লোডিং ব্যবহার করা হয়েছে
        $notices = Notice::with('user')->latest()->get();
        return view('admin.notice.index', compact('notices'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.notice.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'      => 'required|exists:users,id',
            'title'        => 'required|string|max:255',
            'content'      => 'required',
            'published_at' => 'required|date',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status'       => 'required|in:approved,pending,rejected',
        ]);

        $data = $request->all();

        // ইমেজ আপলোড লজিক (আপনার স্টাইল অনুযায়ী)
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/notices'), $imageName);
            $data['image'] = 'uploads/notices/'.$imageName;
        }

        Notice::create($data);

        return redirect()->route('admin.notice.index')->with('message', 'Notice Created Successfully!');
    }

    public function edit($id)
    {
        $notice = Notice::findOrFail($id);
        $users = User::all();
        return view('admin.notice.edit', compact('notice', 'users'));
    }

    public function update(Request $request, $id)
    {
        $notice = Notice::findOrFail($id);

        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required',
            'status'  => 'required|in:approved,pending,rejected',
        ]);
        
        $data = $request->all();

        if ($request->hasFile('image')) {
            // আগের ইমেজ থাকলে ডিলিট করা
            if($notice->image && file_exists(public_path($notice->image))){
                unlink(public_path($notice->image));
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/notices'), $imageName);
            $data['image'] = 'uploads/notices/'.$imageName;
        }

        $notice->update($data);

        return redirect()->route('admin.notice.index')->with('message', 'Notice Updated Successfully!');
    }

    public function delete($id)
    {
        $notice = Notice::findOrFail($id);

        // ডাটাবেজ থেকে ডিলিট করার আগে ফোল্ডার থেকে ইমেজ ডিলিট
        if($notice->image && file_exists(public_path($notice->image))){
            unlink(public_path($notice->image));
        }

        $notice->delete();

        return back()->with('message', 'Notice Deleted Successfully!');
    }
}
