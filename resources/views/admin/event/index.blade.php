@extends('admin.sideber')

@section('main')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">All Events</h4>
            <a href="{{ route('admin.event.create') }}" class="btn btn-primary btn-sm">Create New Event</a>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Date & Time</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>
                                @if($event->image)
                                    <img src="{{ asset($event->image) }}" width="60" class="img-thumbnail">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>**{{ $event->title }}**<br><small class="text-muted">By: {{ $event->user->name ?? 'Admin' }}</small></td>
                            <td>{{ $event->event_category }}</td>
                            <td>{{ $event->event_date }} <br> {{ $event->event_time ?? '--:--' }}</td>
                            <td>
                                <span class="badge bg-{{ $event->status == 'approved' ? 'success' : ($event->status == 'pending' ? 'warning' : 'danger') }}">
                                    {{ ucfirst($event->status) }}
                                </span>
                            </td>
                            <td>{{ $event->price > 0 ? '$'.$event->price : 'Free' }}</td>
                            <td>
                                <a href="{{ route('admin.event.edit', $event->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{ route('admin.event.delete', $event->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Delete this event?')">Delete</a>
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