<?php

namespace App\Http\Controllers;
use App\Models\AlumniProfile;
use App\Models\User;
use App\Models\Event;
use App\Models\JobPost;
use App\Models\Post;



use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $totalAlumni = User::count(); 
        $workingAlumni = AlumniProfile::where('current_position', 'worker')->count(); 
        $annualEvents = Event::count();
        $jobPostings = JobPost::count();
        
        return view('website.index', compact('totalAlumni', 'workingAlumni', 'annualEvents', 'jobPostings'));
    }

    public function alumni()
    {
        $alumus = AlumniProfile::all();
        return view('website.alumni', compact('alumus'));
    }

    public function career()
    {
        $job_posts = JobPost::all();
        return view('website.career', compact('job_posts'));
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function event()
    {
        return view('website.event');
    }

    public function post()
    {
        $posts = Post::all();
        return view('website.post', compact('posts'));
    }

    public function details($id)
    {
        
        $profile = AlumniProfile::findOrFail($id); 
        
        return view('website.details', compact('profile'));
    }

}
