@extends('admin.sideber')

@section('main')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Alumni List</h4>
            <a href="{{ route('admin.alumni.create') }}" class="btn btn-light btn-sm">Add New Alumni</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Batch</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($profiles as $alumni)
                        <tr>
                            <td>
                                @if($alumni->image)
                                    <img src="{{ asset('/' . $alumni->image) }}" width="50" class="rounded-circle">
                                @else
                                    <span class="badge bg-secondary">No Image</span>
                                @endif
                            </td>
                            <td>{{ $alumni->user->name ?? 'N/A' }}</td>
                            <td>{{ $alumni->student_roll }}</td>
                            <td>{{ $alumni->batch }} ({{ $alumni->batch_year }})</td>
                            <td>{{ $alumni->department->name ?? 'N/A' }}</td>
                            <td>{{ $alumni->phone }}</td>
                            <td>
                                <a href="{{ route('admin.alumni.edit', $alumni->id) }}" class="btn btn-info btn-sm text-white">Edit</a>
                                <a href="{{ route('admin.alumni.delete', $alumni->id) }}" class="btn btn-danger btn-sm text-white">Delete</a>
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