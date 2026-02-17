@extends('website.header-footer.header-footer')

@section('main')

<section class="container my-5 py-2 px-2 ">
    <div class="row g-4">
        <div class="col-sm-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100 transition-up">
                        <div class="card-body d-flex align-items-center p-4">
                            <div class="flex-shrink-0 bg-primary bg-opacity-10 p-3 rounded-circle me-3"><i
                                    class="bi bi-people-fill text-primary fs-3"></i></div>
                            <div>
                                <h4 class="fw-bold mb-0">{{ $totalAlumni }}</h4>
                                <p class="text-muted mb-0 small text-uppercase fw-semibold">Total Alumni</p>
                            </div>
                        </div>
                    </div>
                </div>
        
        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 transition-up">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="flex-shrink-0 bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="bi bi-person-badge-fill text-primary fs-3"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0 counter" data-target="1250">{{ $workingAlumni }}</h4>
                        <p class="text-muted mb-0 small text-uppercase fw-semibold">Job Holders</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 transition-up">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="flex-shrink-0 bg-success bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="bi bi-lightbulb-fill text-success fs-3"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0 counter" data-target="450">{{ $entrepreneur }}</h4>
                        <p class="text-muted mb-0 small text-uppercase fw-semibold">Entrepreneurs</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 transition-up">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="flex-shrink-0 bg-info bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="bi bi-laptop-fill text-info fs-3"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0 counter" data-target="820">{{ $Freelancer }}</h4>
                        <p class="text-muted mb-0 small text-uppercase fw-semibold">Freelancers</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 ">
            <div class="card border-0 shadow-sm h-100 transition-up">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="flex-shrink-0 bg-warning bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="bi bi-search text-warning fs-3"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0 counter" data-target="300">{{ $Job_Seeker }}</h4>
                        <p class="text-muted mb-0 small text-uppercase fw-semibold">Job Seekers</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100 transition-up">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="flex-shrink-0 bg-secondary bg-opacity-10 p-3 rounded-circle me-3">
                        <i class="bi bi-three-dots text-secondary fs-3"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold mb-0 counter" data-target="150">{{ $Others }}</h4>
                        <p class="text-muted mb-0 small text-uppercase fw-semibold">Others</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="container mt-5 mb-5">
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-primary">Alumni Directory</h2>
        <p class="text-muted">Connecting our past with the future.</p>
    </div>

    <div class="row">
        @foreach ($alumus as $alumni)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100 shadow border-0 rounded-4 overflow-hidden">
                
                <div class="bg-light">
                    <img src="{{ asset($alumni->image) }}" 
                         class="card-img-top" 
                         style="height: 250px; " 
                         alt="{{ $alumni->user->name }}">
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