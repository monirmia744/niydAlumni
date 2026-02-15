<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        
        $totalAlumni = \App\Models\User::count(); 
        $workingAlumni = \App\Models\AlumniProfile::where('current_position', 'worker')->count(); 
        $annualEvents = \App\Models\Event::count();
        $jobPostings = \App\Models\JobPost::count();

        return view('admin.dashboard', compact('totalAlumni', 'workingAlumni', 'annualEvents', 'jobPostings'));
    }
}
