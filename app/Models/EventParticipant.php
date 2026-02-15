<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    protected $fillable = ['event_id', 'user_id'];

    // এই এন্ট্রিটি কোন ইভেন্টের জন্য
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // এই এন্ট্রিটি কোন ইউজারের জন্য
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
