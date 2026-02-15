@extends('admin.sideber')

@section('main')
<div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Create New Notice</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.notice.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Notice Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter notice title" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label font-weight-bold">Posted By (User)</label>
                                <select name="user_id" class="form-control" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label font-weight-bold">Publish Date</label>
                                <input type="datetime-local" name="published_at" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Status</label>
                            <select name="status" class="form-control">
                                <option value="approved">Approved</option>
                                <option value="pending">Pending</option>
                                <option value="rejected">Rejected</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Notice Content</label>
                            <textarea name="content" class="form-control" rows="5" placeholder="Write the notice details here..." required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Attachment/Image (Optional)</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success px-5">Publish Notice</button>
                            <a href="{{ route('admin.notice.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection