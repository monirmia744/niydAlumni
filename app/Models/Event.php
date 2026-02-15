<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'slug', 'event_category', 'description', 
        'event_date', 'event_time', 'location', 'image', 'price', 'status'
    ];

    // ইভেন্ট যে ইউজার তৈরি করেছে
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // কতজন পার্টিসিপেন্ট আছে (Many to Many)
    public function participants()
    {
        return $this->belongsToMany(User::class, 'event_participants');
    }
}
