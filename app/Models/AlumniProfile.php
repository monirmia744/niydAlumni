<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'department_id', 'image', 'student_roll', 
        'registration_no', 'batch', 'batch_year', 'phone', 
        'email', 'blood_group', 'date_of_birth', 'address', 
        'gender', 'current_position', 'company', 'social_link', 
        'profile_summary', 'status'
    ];

    // User এর সাথে রিলেশন (বিকাশমান তথ্য পেতে)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Department এর সাথে রিলেশন
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}