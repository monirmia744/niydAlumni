@extends('admin.sideber')

@section('main')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Manage Job Posts</h4>
            <a href="{{ route('admin.job.post.create') }}" class="btn btn-primary btn-sm">Post a New Job</a>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Logo</th>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr>
                            <td>
                                @if($job->company_logo)
                                    <img src="{{ asset($job->company_logo) }}" width="50" height="50" class="rounded">
                                @else
                                    <span class="badge bg-secondary">No Logo</span>
                                @endif
                            </td>
                            <td>
                                <strong>{{ $job->job_title }}</strong><br>
                                <small class="text-muted">{{ $job->employment_type }} | {{ $job->job_location }}</small>
                            </td>
                            <td>{{ $job->company_name }}</td>
                            <td>{{ \Carbon\Carbon::parse($job->application_deadline)->format('d M, Y') }}</td>
                            <td>
                                <span class="badge bg-{{ $job->approval_status == 'approved' ? 'success' : ($job->approval_status == 'pending' ? 'warning' : 'danger') }}">
                                    {{ ucfirst($job->approval_status) }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.job.post.edit', $job->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ route('admin.job.post.delete', $job->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection