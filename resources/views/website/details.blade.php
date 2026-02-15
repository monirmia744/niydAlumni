@extends('website.header-footer.header-footer')

@section('main')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4 text-center">
                <div class="card-body">
                    <img src="{{ $profile->image ? asset('/' . $profile->image) : asset('images/default-avatar.png') }}" 
                         alt="{{ $profile->user->name }}" 
                         class="rounded-circle img-thumbnail mb-3" 
                         style="width: 150px; height: 150px; object-fit: cover;">
                    
                    <h4 class="fw-bold">{{ $profile->user->name }}</h4>
                    <p class="text-muted">{{ $profile->current_position ?? 'Alumni' }} at {{ $profile->company ?? 'N/A' }}</p>
                    
                    @if($profile->social_link)
                        <a href="{{ $profile->social_link }}" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill px-4">
                            <i class="bi bi-linkedin"></i> Connect Profile
                        </a>
                    @endif
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white fw-bold">Contact Information</div>
                <div class="card-body">
                    <p class="mb-2"><strong>Email:</strong> <br> {{ $profile->email ?? $profile->user->email }}</p>
                    <p class="mb-2"><strong>Phone:</strong> <br> {{ $profile->phone }}</p>
                    <p class="mb-0"><strong>Address:</strong> <br> {{ $profile->address }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">Academic Information</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="text-muted d-block">Department</label>
                            <span class="fw-bold">{{ $profile->department->name ?? 'N/A' }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted d-block">Batch</label>
                            <span class="fw-bold">{{ $profile->batch }} ({{ $profile->batch_year }})</span>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted d-block">Student Roll</label>
                            <span>{{ $profile->student_roll ?? 'N/A' }}</span>
                        </div>
                        <div class="col-md-6">
                            <label class="text-muted d-block">Registration No</label>
                            <span>{{ $profile->registration_no ?? 'N/A' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">Profile Summary</h5>
                    <p class="text-secondary">
                        {{ $profile->profile_summary ?? 'No summary provided.' }}
                    </p>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">Additional Details</h5>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="text-muted d-block">Blood Group</label>
                            <span class="badge bg-danger">{{ $profile->blood_group ?? 'Unknown' }}</span>
                        </div>
                        <div class="col-md-4">
                            <label class="text-muted d-block">Gender</label>
                            <span>{{ ucfirst($profile->gender) }}</span>
                        </div>
                        <div class="col-md-4">
                            <label class="text-muted d-block">Date of Birth</label>
                            <span>{{ \Carbon\Carbon::parse($profile->date_of_birth)->format('d M, Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <a href="{{ route('alumni') }}" class="btn btn-light border text-secondary shadow-sm">
                    <i class="bi bi-arrow-left"></i> Back to Directory
                </a>
            </div>
        </div>
    </div>
</div>
@endsection