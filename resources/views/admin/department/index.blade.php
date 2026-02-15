@extends('admin.sideber')

@section('main')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Department List</h4>
            <a href="{{ route('admin.department.create') }}" class="btn btn-light btn-sm">Add New Department</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Department Name</th>
                            <th>Code</th>
                            <th width="200">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($departments as $dept)
                        <tr>
                            <td>{{ $dept->id }}</td>
                            <td>**{{ $dept->name }}**</td>
                            <td><span class="badge bg-info text-dark">{{ $dept->code ?? 'N/A' }}</span></td>
                            <td>
                                <a href="{{ route('admin.department.edit', $dept->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ route('admin.department.delete', $dept->id) }}" class="btn btn-danger btn-sm" onckick="return confirm('Are you sure you want to delete this?')">Delete</a>         
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No departments found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection