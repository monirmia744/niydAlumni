@extends('admin.sideber') {{-- আপনার মেইন লেআউট ফাইলের নাম দিন --}}

@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between">
                    <h4 class="mb-0">Create Alumni Profile</h4>
                    <a href="{{ route('admin.alumni.index') }}" class="btn btn-light btn-sm">Back</a>
                </div>
                <div class="card-body">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.alumni.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            {{-- User Selection --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Select User</label>
                                <select name="user_id" class="form-control" required>
                                    <option value="">-- Select User --</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Department Selection --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Select Department</label>
                                <select name="department_id" class="form-control" required>
                                    <option value="">-- Select Department --</option>
                                    @foreach($departments as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Student Roll & Reg --}}
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Student Roll</label>
                                <input type="text" name="student_roll" class="form-control" placeholder="Roll No">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Registration No</label>
                                <input type="text" name="registration_no" class="form-control" placeholder="Reg No">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Batch</label>
                                <input type="text" name="batch" class="form-control" placeholder="e.g. 45th" required>
                            </div>

                            {{-- Year & Phone --}}
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Batch Year</label>
                                <input type="number" name="batch_year" class="form-control" placeholder="YYYY" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            {{-- DOB & Gender --}}
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-control" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Blood Group</label>
                                <input type="text" name="blood_group" class="form-control" placeholder="A+">
                            </div>

                            {{-- Image --}}
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Profile Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            {{-- Career Info --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Current Position</label>
                                <select name="current_position" id="" class="form-select" required>
                                    <option value="">-- Select Status --</option>
                                    <option value="Job-Holder/Professional">Job Holder/Professional</option>
                                    <option value="Entrepreneur">Entrepreneur</option>
                                    <option value="Freelancer">Freelancer</option>
                                    <option value="Job Seeker">Job Seeker</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company" class="form-control">
                            </div>

                            {{-- Address & Summary --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Profile Summary</label>
                                <textarea name="profile_summary" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-success px-4">Save Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection