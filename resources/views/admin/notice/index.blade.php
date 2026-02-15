@extends('admin.sideber')

@section('main')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Notice Board</h4>
            <a href="{{ route('admin.notice.create') }}" class="btn btn-primary btn-sm">Create New Notice</a>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Published Date</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($notices as $notice)
                        <tr>
                            <td>
                                @if($notice->image)
                                    <img src="{{ asset($notice->image) }}" width="60" class="img-thumbnail">
                                @else
                                    <span class="text-muted small">No Image</span>
                                @endif
                            </td>
                            <td>**{{ $notice->title }}**</td>
                            <td>{{ \Carbon\Carbon::parse($notice->published_at)->format('d M, Y') }}</td>
                            <td>{{ $notice->user->name ?? 'Admin' }}</td>
                            <td>
                                @if($notice->status == 'approved')
                                    <span class="badge bg-success">Approved</span>
                                @elseif($notice->status == 'pending')
                                    <span class="badge bg-warning text-dark">Pending</span>
                                @else
                                    <span class="badge bg-danger">Rejected</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.notice.edit', $notice->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ route('admin.notice.delete', $notice->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this notice?')">Delete</a>
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