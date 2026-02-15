@extends('admin.sideber')

@section('main')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">All Posts</h4>
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary btn-sm">Create New Post</a>
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
                            <th>Author</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>
                                @if($post->image)
                                    <img src="{{ asset($post->image) }}" width="70" class="img-thumbnail">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>**{{ $post->title }}**</td>
                            <td>{{ $post->user->name ?? 'Unknown' }}</td>
                            <td>{{ $post->category ?? 'N/A' }}</td>
                            <td>
                                @if($post->status == 'published')
                                    <span class="badge bg-success">Published</span>
                                @elseif($post->status == 'draft')
                                    <span class="badge bg-warning text-dark">Draft</span>
                                @else
                                    <span class="badge bg-secondary">Archived</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ route('admin.post.delete', $post->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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