<?php

namespace App\Http\Controllers;
use App\Models\AlumniProfile;
use App\Models\User;
use App\Models\Event;
use App\Models\JobPost;
use App\Models\Post;
use App\Models\Department;



use Illuminate\Http\Request;

class WebsiteController extends Controller
{
   public function index(Request $request)
    {
        // ১. স্ট্যাটিক ডেটা (সবসময় লাগবে)
        $totalAlumni = User::count(); 
        $workingAlumni = AlumniProfile::whereNotNull('current_position')->count();
        $annualEvents = Event::count();
        $jobPostings = JobPost::count();
        $departments = Department::all();
        $batchs = AlumniProfile::select('batch')->distinct()->orderBy('batch', 'asc')->get();
        $years = AlumniProfile::select('batch_year')->distinct()->orderBy('batch_year', 'desc')->get();

        // ২. ফিল্টারিং লজিক
        $query = AlumniProfile::with(['user', 'department'])->where('status', 'active');

        // চেক করছি ইউজার কোনো ফিল্টার দিয়েছে কি না
        $hasFilter = $request->filled('department') || $request->filled('batch') || $request->filled('year');

        if ($hasFilter) {
            // ডিপার্টমেন্ট ফিল্টার
            if ($request->filled('department') && $request->department != 'all') {
                $query->whereHas('department', function($q) use ($request) {
                    $q->where('name', $request->department);
                });
            }
            // ব্যাচ ফিল্টার
            if ($request->filled('batch')) {
                $query->where('batch', $request->batch);
            }
            // বছর ফিল্টার
            if ($request->filled('year')) {
                $query->where('batch_year', $request->year);
            }
            
            $alumniResults = $query->latest()->paginate(12);
        } else {
            // যদি কোনো ফিল্টার না থাকে, তবে খালি রেজাল্ট পাঠাবে (Pagination সহ)
            $alumniResults = AlumniProfile::where('id', 0)->paginate(12); 
        }

        $foundCount = $alumniResults->total();

        return view('website.index', compact(
            'totalAlumni', 'workingAlumni', 'annualEvents', 'jobPostings', 
            'departments', 'batchs', 'years', 'alumniResults', 'foundCount'
        ));
    }
    public function alumni()
    {
        $totalAlumni = User::count();
        $workingAlumni = AlumniProfile::where('current_position', 'Job-Holder/Professional')->count();
        $entrepreneur = AlumniProfile::where('current_position', 'Entrepreneur')->count();
        $Freelancer = AlumniProfile::where('current_position', 'Freelancer')->count();
        $Job_Seeker = AlumniProfile::where('current_position', 'Job Seeker')->count();
        $Others = AlumniProfile::where('current_position', 'Others')->count();
        $alumus = AlumniProfile::all();
        return view('website.alumni', compact('alumus', 'totalAlumni', 'workingAlumni',
        'entrepreneur', 'Freelancer', 'Job_Seeker', 'Others'));
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
