@extends('admin.sideber')

@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-warning text-dark d-flex justify-content-between">
                    <h4 class="mb-0">Edit Alumni Profile</h4>
                    <a href="{{ route('admin.alumni.index') }}" class="btn btn-dark btn-sm">Back</a>
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

                    <form action="{{ route('admin.alumni.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Select User</label>
                                <select name="user_id" class="form-control" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $profile->user_id == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Select Department</label>
                                <select name="department_id" class="form-control" required>
                                    @foreach($departments as $dept)
                                        <option value="{{ $dept->id }}" {{ $profile->department_id == $dept->id ? 'selected' : '' }}>
                                            {{ $dept->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Student Roll</label>
                                <input type="text" name="student_roll" class="form-control" value="{{ $profile->student_roll }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Registration No</label>
                                <input type="text" name="registration_no" class="form-control" value="{{ $profile->registration_no }}">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Batch</label>
                                <input type="text" name="batch" class="form-control" value="{{ $profile->batch }}" required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Batch Year</label>
                                <input type="number" name="batch_year" class="form-control" value="{{ $profile->batch_year }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ $profile->phone }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $profile->email }}">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-control" value="{{ $profile->date_of_birth }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-control" required>
                                    <option value="Male" {{ $profile->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ $profile->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                    <option value="Other" {{ $profile->gender == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Blood Group</label>
                                <input type="text" name="blood_group" class="form-control" value="{{ $profile->blood_group }}">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Profile Image</label>
                                <input type="file" name="image" class="form-control mb-2">
                                @if($profile->image)
                                    <img src="{{ asset('storage/' . $profile->image) }}" width="100" class="img-thumbnail">
                                @endif
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Current Position</label>
                                <select name="current_position" class="form-control" required>
                                    <option value="Job-Holder/Professional" {{ $profile->current_position == 'Job-Holder/Professional' ? 'selected' : '' }}>Job Holder/Professional</option>
                                    <option value="Entrepreneur" {{ $profile->current_position == 'Entrepreneurr' ? 'selected' : '' }}>Entrepreneur</option>
                                    <option value="Freelancer" {{ $profile->current_position == 'Freelancer' ? 'selected' : '' }}>Freelancer</option>
                                    <option value="Job Seeker" {{ $profile->current_position == 'Job Seeker' ? 'selected' : '' }}>Job Seeker</option>
                                    <option value="Others" {{ $profile->current_position == 'Others' ? 'selected' : '' }}>Others</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Company Name</label>
                                <input type="text" name="company" class="form-control" value="{{ $profile->company }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Address</label>
                                <textarea name="address" class="form-control" rows="3" required>{{ $profile->address }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Profile Summary</label>
                                <textarea name="profile_summary" class="form-control" rows="3">{{ $profile->profile_summary }}</textarea>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-warning px-4">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection