@extends('admin.sideber')

@section('main')
<div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Edit Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- আপনার কন্ট্রোলার অনুযায়ী সরাসরি POST রিকোয়েস্ট --}}
                        
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label class="form-label font-weight-bold">Post Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label font-weight-bold">Author</label>
                                <select name="user_id" class="form-control" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $post->user_id == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label font-weight-bold">Category</label>
                                <input type="text" name="category" class="form-control" value="{{ $post->category }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label font-weight-bold">Status</label>
                                <select name="status" class="form-control">
                                    <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>Published</option>
                                    <option value="archived" {{ $post->status == 'archived' ? 'selected' : '' }}>Archived</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label font-weight-bold">Content</label>
                                <textarea name="content" class="form-control" rows="6" required>{{ $post->content }}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label font-weight-bold">Update Image</label>
                                <input type="file" name="image" class="form-control mb-2">
                                @if($post->image)
                                    <div class="mt-2">
                                        <p class="small text-muted">Current Image:</p>
                                        <img src="{{ asset($post->image) }}" width="150" class="img-thumbnail">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-info text-white px-5">Update Post</button>
                            <a href="{{ route('admin.post.index') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection