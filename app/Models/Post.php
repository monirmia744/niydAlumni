<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'title', 
        'image', 
        'content', 
        'category', 
        'status'
    ];

    // ইউজারের সাথে রিলেশন
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
