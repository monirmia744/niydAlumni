@extends('admin.sideber')

@section('main')
<div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Create New Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label class="form-label font-weight-bold">Post Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter post title" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label font-weight-bold">Author (User)</label>
                                <select name="user_id" class="form-control" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label font-weight-bold">Category</label>
                                <input type="text" name="category" class="form-control" placeholder="e.g. Technology, Education">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label font-weight-bold">Status</label>
                                <select name="status" class="form-control">
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                    <option value="archived">Archived</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label font-weight-bold">Content</label>
                                <textarea name="content" class="form-control" rows="6" placeholder="Write your content here..." required></textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label font-weight-bold">Post Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-success px-5">Publish Post</button>
                            <a href="{{ route('admin.post.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection