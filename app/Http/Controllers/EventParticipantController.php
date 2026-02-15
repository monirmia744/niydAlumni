<?php

namespace App\Http\Controllers;

use App\Models\EventParticipant;
use App\Models\Event;
use Illuminate\Http\Request;

class EventParticipantController extends Controller
{
    // নির্দিষ্ট ইভেন্টের সব অংশগ্রহণকারী দেখা
    public function index($event_id = null) // = null যোগ করা হয়েছে
{
    if ($event_id) {
        // নির্দিষ্ট একটি ইভেন্টের জন্য
        $event = Event::findOrFail($event_id);
        $participants = EventParticipant::with('user')->where('event_id', $event_id)->get();
        return view('admin.event.participants', compact('event', 'participants'));
    } else {
        // যদি আইডি না থাকে, সব পার্টিসিপেন্ট দেখাবে
        $participants = EventParticipant::with(['user', 'event'])->get();
        // এখানে একটি আলাদা ব্লেড ফাইল বা একই ফাইলে কন্ডিশন ব্যবহার করতে পারেন
        return view('admin.event.all_participants', compact('participants'));
    }
}
}
