<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Models\User;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function index()
    {
        $jobs = JobPost::with('user')->latest()->get();
        return view('admin.job-post.index', compact('jobs'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.job-post.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'application_deadline' => 'required|date',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // কোম্পানি লোগো আপলোড
        if ($request->hasFile('company_logo')) {
            $logoName = 'logo_'.time().'.'.$request->company_logo->extension();
            $request->company_logo->move(public_path('uploads/jobs/logos'), $logoName);
            $data['company_logo'] = 'uploads/jobs/logos/'.$logoName;
        }

        // জব ইমেজ আপলোড
        if ($request->hasFile('image')) {
            $imageName = 'job_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/jobs/images'), $imageName);
            $data['image'] = 'uploads/jobs/images/'.$imageName;
        }

        JobPost::create($data);

        return redirect()->route('admin.job.post.index')->with('message', 'Job Posted Successfully!');
    }

    public function edit($id)
    {
        $job = JobPost::findOrFail($id);
        $users = User::all();
        return view('admin.job-post.edit', compact('job', 'users'));
    }

    public function update(Request $request, $id)
    {
        $job = JobPost::findOrFail($id);
        $data = $request->all();

        // লোগো আপডেট
        if ($request->hasFile('company_logo')) {
            if($job->company_logo && file_exists(public_path($job->company_logo))){
                unlink(public_path($job->company_logo));
            }
            $logoName = 'logo_'.time().'.'.$request->company_logo->extension();
            $request->company_logo->move(public_path('uploads/jobs/logos'), $logoName);
            $data['company_logo'] = 'uploads/jobs/logos/'.$logoName;
        }

        // ইমেজ আপডেট
        if ($request->hasFile('image')) {
            if($job->image && file_exists(public_path($job->image))){
                unlink(public_path($job->image));
            }
            $imageName = 'job_'.time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/jobs/images'), $imageName);
            $data['image'] = 'uploads/jobs/images/'.$imageName;
        }

        $job->update($data);

        return redirect()->route('admin.job.post.index')->with('message', 'Job Updated Successfully!');
    }

    public function delete($id)
    {
        $job = JobPost::findOrFail($id);

        // ফাইলগুলো সার্ভার থেকে ডিলিট করা
        if($job->company_logo && file_exists(public_path($job->company_logo))){
            unlink(public_path($job->company_logo));
        }
        if($job->image && file_exists(public_path($job->image))){
            unlink(public_path($job->image));
        }

        $job->delete();

        return back()->with('message', 'Job Deleted Successfully!');
    }
}
