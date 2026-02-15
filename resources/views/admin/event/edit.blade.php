@extends('admin.sideber')

@section('main')
<div class="container mt-5 pb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Edit Event</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- আপনার কন্ট্রোলারে শুধু Request $request আছে, @method('PUT') দেওয়ার দরকার নেই যদি রাউট POST হয়। 
                           তবে রিসোর্স রাউট হলে এখানে @method('PUT') দিতে হবে। --}}
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Organizer</label>
                                <select name="user_id" class="form-control" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" {{ $event->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Event Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $event->title }}" required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label class="form-label">Category</label>
                                <select name="event_category" class="form-control" required>
                                    <option value="Workshop" {{ $event->event_category == 'Workshop' ? 'selected' : '' }}>Workshop</option>
                                    <option value="Seminar" {{ $event->event_category == 'Seminar' ? 'selected' : '' }}>Seminar</option>
                                    <option value="Reunion" {{ $event->event_category == 'Reunion' ? 'selected' : '' }}>Reunion</option>
                                    <option value="Conference" {{ $event->event_category == 'Conference' ? 'selected' : '' }}>Conference</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Event Date</label>
                                <input type="date" name="event_date" class="form-control" value="{{ $event->event_date }}" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Event Time</label>
                                <input type="time" name="event_time" class="form-control" value="{{ $event->event_time }}">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" class="form-control" value="{{ $event->location }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" name="price" step="0.01" class="form-control" value="{{ $event->price }}">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="pending" {{ $event->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="approved" {{ $event->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                    <option value="rejected" {{ $event->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4">{{ $event->description }}</textarea>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label class="form-label">Event Image</label>
                                <input type="file" name="image" class="form-control mb-2">
                                @if($event->image)
                                    <img src="{{ asset($event->image) }}" width="150" class="img-thumbnail d-block">
                                @endif
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-info text-white px-5">Update Event</button>
                            <a href="{{ route('admin.event.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection