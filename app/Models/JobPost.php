<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'job_title', 'company_name', 'company_logo', 'image', 
        'job_location', 'employment_type', 'experience_level', 'job_description', 
        'requirements', 'salary_range', 'application_deadline', 'phone', 
        'email', 'application_link', 'approval_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
