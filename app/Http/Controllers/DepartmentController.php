<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('admin.department.index', compact('departments'));
    }
    public function create()
    {
        return view('admin.department.create');
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('admin.department.edit', compact('department'));
    }
    public function store(Request $request)
    {
        // ভ্যালিডেশন যোগ করুন যাতে কেউ ফাকা ডাটা না পাঠাতে পারে
        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:departments,code',
        ]);
        
        Department::addNewDepartment($request);
        return redirect()->route('admin.department.index')->with('message', 'Department Stored Successfully!');
    }

    public function update(Request $request, $id)
    {
        // ভ্যালিডেশন
        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:departments,code,' . $id,
        ]);

        $department = Department::findOrFail($id); // find() এর বদলে findOrFail() ব্যবহার করা নিরাপদ
        $department->name = $request->name;
        $department->code = $request->code;
        $department->save();

        return redirect()->route('admin.department.index')->with('message', 'Department Updated Successfully!');
    }

    public function delete($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        return back()->with('message', 'Department deleted successfully!');
    }
}