@extends('admin.sideber')

@section('main')
<div class="container mt-5 pb-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Create Job Circular</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.job.post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    {{-- Basic Info --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-weight-bold">Job Title *</label>
                        <input type="text" name="job_title" class="form-control" placeholder="e.g. Software Engineer" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label font-weight-bold">Company Name *</label>
                        <input type="text" name="company_name" class="form-control" placeholder="Company Ltd." required>
                    </div>

                    {{-- Selection Fields --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Job Location</label>
                        <select name="job_location" class="form-control">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Remote">Remote</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Employment Type</label>
                        <select name="employment_type" class="form-control">
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                            <option value="Contractual">Contractual</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Experience Level</label>
                        <select name="experience_level" class="form-control">
                            <option value="Entry">Entry</option>
                            <option value="Mid">Mid</option>
                            <option value="Senior">Senior</option>
                        </select>
                    </div>

                    {{-- Salary & Deadline --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Salary Range</label>
                        <input type="text" name="salary_range" class="form-control" placeholder="e.g. 30k - 50k">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Application Deadline *</label>
                        <input type="date" name="application_deadline" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Posted By (User)</label>
                        <select name="user_id" class="form-control" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Description --}}
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Job Description *</label>
                        <textarea name="job_description" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Requirements</label>
                        <textarea name="requirements" class="form-control" rows="3"></textarea>
                    </div>

                    {{-- Media --}}
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Company Logo</label>
                        <input type="file" name="company_logo" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Job Related Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    {{-- Contact & Links --}}
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Application Link</label>
                        <input type="url" name="application_link" class="form-control" placeholder="https://...">
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-success px-5">Save Job Post</button>
                    <a href="{{ route('admin.job.post.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection