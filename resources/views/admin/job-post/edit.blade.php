@extends('admin.sideber')

@section('main')
<div class="container mt-5 pb-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Edit Job Circular</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.job.post.update', $job->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Job Title</label>
                        <input type="text" name="job_title" class="form-control" value="{{ $job->job_title }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Company Name</label>
                        <input type="text" name="company_name" class="form-control" value="{{ $job->company_name }}" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">Approval Status</label>
                        <select name="approval_status" class="form-control">
                            <option value="pending" {{ $job->approval_status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="approved" {{ $job->approval_status == 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="rejected" {{ $job->approval_status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Deadline</label>
                        <input type="date" name="application_deadline" class="form-control" value="{{ $job->application_deadline }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Salary</label>
                        <input type="text" name="salary_range" class="form-control" value="{{ $job->salary_range }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="job_description" class="form-control" rows="4">{{ $job->job_description }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Change Company Logo</label>
                        <input type="file" name="company_logo" class="form-control mb-2">
                        @if($job->company_logo)
                            <img src="{{ asset($job->company_logo) }}" width="80" class="img-thumbnail">
                        @endif
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Change Job Image</label>
                        <input type="file" name="image" class="form-control mb-2">
                        @if($job->image)
                            <img src="{{ asset($job->image) }}" width="80" class="img-thumbnail">
                        @endif
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-info text-white px-5">Update Job Post</button>
                    <a href="{{ route('admin.job.post.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection