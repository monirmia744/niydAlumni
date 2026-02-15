<?php

namespace App\Http\Controllers;

use App\Models\AlumniProfile;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class AlumniProfileController extends Controller
{
    public function index()
    {
        // ইগার লোডিং (with) ব্যবহার করা হয়েছে যাতে ডাটাবেজ কুয়েরি কম হয়
        $profiles = AlumniProfile::with(['user', 'department'])->get();
        return view('admin.alumni.index', compact('profiles'));
    }

    public function create()
    {
        $users = User::all();
        $departments = Department::all();
        return view('admin.alumni.create', compact('users', 'departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'department_id' => 'required|exists:departments,id',
            'batch' => 'required',
            'batch_year' => 'required|digits:4',
            'phone' => 'required',
            'email' => 'nullable|email|unique:alumni_profiles,email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        // ইমেজ আপলোড লজিক
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/alumni'), $imageName);
            $data['image'] = 'uploads/alumni/'.$imageName;
        }

        AlumniProfile::create($data);

        return redirect()->route('admin.alumni.index')->with('message', 'Profile Created Successfully!');
    }

    public function edit($id)
    {
        $profile = AlumniProfile::findOrFail($id);
        $users = User::all();
        $departments = Department::all();
        return view('admin.alumni.edit', compact('profile', 'users', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $profile = AlumniProfile::findOrFail($id);
        
        $data = $request->all();

        if ($request->hasFile('image')) {
            // আগের ইমেজ ডিলিট করার কোড (ঐচ্ছিক)
            if($profile->image && file_exists(public_path($profile->image))){
                unlink(public_path($profile->image));
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/alumni'), $imageName);
            $data['image'] = 'uploads/alumni/'.$imageName;
        }

        $profile->update($data);

        return redirect()->route('admin.alumni.index')->with('message', 'Profile Updated Successfully!');
    }

    public function delete($id)
    {
        $profile = AlumniProfile::findOrFail($id);
        if($profile->image && file_exists(public_path($profile->image))){
            unlink(public_path($profile->image));
        }
        $profile->delete();
        return back()->with('message', 'Profile Deleted Successfully!');
    }
}