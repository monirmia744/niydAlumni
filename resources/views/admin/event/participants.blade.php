@extends('admin.sideber')

@section('main')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-0">Participants List</h4>
                <small class="text-info">Event: {{ $event->title }}</small>
            </div>
            <div>
                {{-- ভবিষ্যতে PDF Generate করার জন্য এই বাটনটি কাজে লাগবে --}}
                <a href="#" class="btn btn-danger btn-sm">
                    <i class="fas fa-file-pdf"></i> Download PDF
                </a>
                <a href="{{ route('admin.event.index') }}" class="btn btn-light btn-sm">Back to Events</a>
            </div>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="table-responsive">
                {{-- PDF এর জন্য এই টেবিল আইডি (printableTable) ব্যবহার করা সহজ হবে --}}
                <table class="table table-bordered table-striped align-middle" id="participantTable">
                    <thead class="table-secondary">
                        <tr>
                            <th>SL</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Joined Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($participants as $key => $participant)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <strong>{{ $participant->user->name }}</strong>
                            </td>
                            <td>{{ $participant->user->email }}</td>
                            <td>{{ $participant->user->phone ?? 'N/A' }}</td>
                            <td>{{ $participant->created_at->format('d M, Y') }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.event.participant.delete', $participant->id) }}" method="POST" onsubmit="return confirm('Remove this participant?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Remove</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">No participants joined yet.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-muted small">
            Total Participants: {{ $participants->count() }}
        </div>
    </div>
</div>
@endsection