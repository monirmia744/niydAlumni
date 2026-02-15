@extends('website.header-footer.header-footer')

@section('main')
<div class="container mt-5 mb-5">
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-primary">Alumni Directory</h2>
        <p class="text-muted">Connecting our past with the future.</p>
    </div>

    <div class="row">
        @foreach ($alumus as $alumni)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 shadow border-0 rounded-4 overflow-hidden">
                
                <div class="bg-light">
                    <img src="{{ asset($alumni->image) }}" 
                         class="card-img-top" 
                         style="height: 260px; object-fit: cover;" 
                         alt="{{ $alumni->user->name }}"
                         onerror="this.src='https://via.placeholder.com/400x300?text=No+Profile+Photo'">
                </div>

                <div class="card-body">
                    <span class="badge rounded-pill bg-primary-subtle text-primary mb-2">
                        {{ $alumni->batch }} Batch
                    </span>

                    <h5 class="card-title fw-bold text-dark mb-1">{{ $alumni->user->name }}</h5>
                    
                    <p class="card-text mb-2 text-secondary small">
                        <strong>{{ $alumni->current_position ?? 'Alumni' }}</strong> 
                        @if($alumni->company) <span class="text-muted">at</span> {{ $alumni->company }} @endif
                    </p>

                    <hr class="text-secondary opacity-25">

                    <p class="card-text text-muted small">
                        {{ Str::limit($alumni->profile_summary, 80, '...') }}
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center mt-3 bg-light p-2 rounded-3">
                        <small class="text-muted"><i class="bi bi-droplet-fill text-danger"></i> {{ $alumni->blood_group ?? 'N/A' }}</small>
                        <small class="text-muted"><i class="bi bi-geo-alt"></i> {{ Str::limit($alumni->address, 15) }}</small>
                    </div>
                </div>

                <div class="card-footer bg-white border-0 p-3">
                    <a href="{{ route('website.alumni.details', $alumni->id) }}" class="btn btn-primary w-100 rounded-pill fw-bold">View Full Profile</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection