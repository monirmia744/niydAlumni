@extends('admin.sideber')

@section('main')
<div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Edit Notice</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.notice.update', $notice->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Notice Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $notice->title }}" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label font-weight-bold">Posted By</label>
                                <select name="user_id" class="form-control" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $notice->user_id == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label font-weight-bold">Status</label>
                                <select name="status" class="form-control">
                                    <option value="approved" {{ $notice->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="pending" {{ $notice->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="rejected" {{ $notice->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Notice Content</label>
                            <textarea name="content" class="form-control" rows="5" required>{{ $notice->content }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Update Attachment</label>
                            <input type="file" name="image" class="form-control mb-2">
                            @if($notice->image)
                                <img src="{{ asset($notice->image) }}" width="120" class="img-thumbnail mt-1">
                            @endif
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-info text-white px-5">Update Notice</button>
                            <a href="{{ route('admin.notice.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection