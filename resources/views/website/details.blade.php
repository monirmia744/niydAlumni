@extends('website.header-footer.header-footer')

@section('main')
<div class="container py-5">
    <div class="row g-4">
        <!-- Profile Sidebar -->
        <div class="col-lg-4">
            <!-- Profile Card -->
            <div class="card border-0 shadow-lg mb-4 text-center position-relative overflow-hidden">
                <!-- Background Decoration -->
                <div class="position-absolute top-0 start-0 w-100 h-25 bg-gradient-primary"></div>
                
                <div class="card-body position-relative pt-5">
                    <!-- Profile Image with Animation -->
                    <div class="position-relative d-inline-block">
                        <img src="{{ $profile->image ? asset('/' . $profile->image) : asset('images/default-avatar.png') }}" 
                             alt="{{ $profile->user->name }}" 
                             class="rounded-circle border border-4 border-white shadow-lg mb-3" 
                             style="width: 160px; height: 160px; object-fit: cover; transition: transform 0.3s ease;"
                             onmouseover="this.style.transform='scale(1.05)'"
                             onmouseout="this.style.transform='scale(1)'">
                        
                        <!-- Online Status Badge -->
                        <span class="position-absolute bottom-0 end-0 bg-success rounded-circle p-2 border border-2 border-white" 
                              style="width: 20px; height: 20px;"></span>
                    </div>
                    
                    <h4 class="fw-bold mb-1">{{ $profile->user->name }}</h4>
                    
                    <!-- Professional Title with Icon -->
                    <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                        <i class="bi bi-briefcase-fill text-primary"></i>
                        <p class="text-muted mb-0">
                            {{ $profile->current_position ?? 'Alumni' }} 
                            @if($profile->company)
                                <span class="mx-1">•</span> 
                                <span class="fw-medium">{{ $profile->company }}</span>
                            @endif
                        </p>
                    </div>
                    
                    <!-- Social Links -->
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        @if($profile->social_link)
                            <a href="{{ $profile->social_link }}" target="_blank" 
                               class="btn btn-primary rounded-pill px-4 py-2 shadow-sm hover-lift">
                                <i class="bi bi-linkedin me-2"></i>Connect on LinkedIn
                            </a>
                        @endif
                    </div>
                </div>
                
                <!-- Profile Stats -->
                <div class="card-footer bg-white border-0 py-3">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="text-center">
                                <h6 class="fw-bold text-primary mb-0">125</h6>
                                <small class="text-muted">Connections</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center border-start border-end">
                                <h6 class="fw-bold text-primary mb-0">15</h6>
                                <small class="text-muted">Posts</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <h6 class="fw-bold text-primary mb-0">2.5k</h6>
                                <small class="text-muted">Views</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Information Card -->
            <div class="card border-0 shadow-lg mb-4 hover-shadow">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">
                        <i class="bi bi-envelope-fill text-primary me-2"></i>
                        Contact Information
                    </h5>
                </div>
                <div class="card-body">
                    <div class="contact-info-item mb-3">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle bg-primary-soft me-3">
                                <i class="bi bi-envelope text-primary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <small class="text-muted d-block">Email Address</small>
                                <span class="fw-medium">{{ $profile->email ?? $profile->user->email }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-info-item mb-3">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle bg-success-soft me-3">
                                <i class="bi bi-telephone-fill text-success"></i>
                            </div>
                            <div class="flex-grow-1">
                                <small class="text-muted d-block">Phone Number</small>
                                <span class="fw-medium">{{ $profile->phone ?? 'Not provided' }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle bg-info-soft me-3">
                                <i class="bi bi-geo-alt-fill text-info"></i>
                            </div>
                            <div class="flex-grow-1">
                                <small class="text-muted d-block">Address</small>
                                <span class="fw-medium">{{ $profile->address ?? 'Not provided' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-lg-8">
            <!-- Academic Information Card -->
            <div class="card border-0 shadow-lg mb-4 hover-shadow">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">
                        <i class="bi bi-mortarboard-fill text-primary me-2"></i>
                        Academic Information
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="info-card bg-light p-3 rounded-3">
                                <small class="text-muted d-block mb-1">Department</small>
                                <h6 class="fw-bold mb-0">{{ $profile->department->name ?? 'N/A' }}</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card bg-light p-3 rounded-3">
                                <small class="text-muted d-block mb-1">Batch</small>
                                <h6 class="fw-bold mb-0">{{ $profile->batch }} ({{ $profile->batch_year }})</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card bg-light p-3 rounded-3">
                                <small class="text-muted d-block mb-1">Student Roll</small>
                                <h6 class="fw-bold mb-0">{{ $profile->student_roll ?? 'N/A' }}</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-card bg-light p-3 rounded-3">
                                <small class="text-muted d-block mb-1">Registration No</small>
                                <h6 class="fw-bold mb-0">{{ $profile->registration_no ?? 'N/A' }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Summary Card -->
            <div class="card border-0 shadow-lg mb-4 hover-shadow">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">
                        <i class="bi bi-file-text-fill text-primary me-2"></i>
                        Profile Summary
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-secondary lh-lg" style="font-size: 1rem;">
                        {{ $profile->profile_summary ?? 'No summary provided. The alumni has not added a profile summary yet.' }}
                    </p>
                </div>
            </div>

            <!-- Personal Details Card -->
            <div class="card border-0 shadow-lg mb-4 hover-shadow">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">
                        <i class="bi bi-person-badge-fill text-primary me-2"></i>
                        Personal Details
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="text-center p-3 bg-light rounded-3">
                                <i class="bi bi-droplet-half text-danger fs-4 mb-2"></i>
                                <small class="text-muted d-block">Blood Group</small>
                                <span class="badge bg-danger rounded-pill px-3 py-2 mt-1">
                                    {{ $profile->blood_group ?? 'Unknown' }}
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 bg-light rounded-3">
                                <i class="bi bi-gender-{{ strtolower($profile->gender) }} text-primary fs-4 mb-2"></i>
                                <small class="text-muted d-block">Gender</small>
                                <span class="fw-bold">{{ ucfirst($profile->gender ?? 'Not specified') }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3 bg-light rounded-3">
                                <i class="bi bi-calendar-heart-fill text-info fs-4 mb-2"></i>
                                <small class="text-muted d-block">Date of Birth</small>
                                <span class="fw-bold">
                                    {{ $profile->date_of_birth ? \Carbon\Carbon::parse($profile->date_of_birth)->format('d M, Y') : 'Not specified' }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Section (Optional Enhancement) -->
            @if($profile->skills ?? false)
            <div class="card border-0 shadow-lg mb-4 hover-shadow">
                <div class="card-header bg-white border-0 pt-4 pb-0">
                    <h5 class="fw-bold mb-0">
                        <i class="bi bi-stars text-primary me-2"></i>
                        Skills & Expertise
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap gap-2">
                        @foreach(explode(',', $profile->skills) as $skill)
                            <span class="badge bg-light text-dark border rounded-pill px-3 py-2">
                                {{ trim($skill) }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            <!-- Back Button -->
            <div class="mt-4">
                <a href="{{ route('alumni') }}" class="btn btn-outline-secondary rounded-pill px-4 py-2 hover-lift">
                    <i class="bi bi-arrow-left me-2"></i>Back to Directory
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.icon-circle {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.bg-primary-soft {
    background-color: rgba(102, 126, 234, 0.1);
}

.bg-success-soft {
    background-color: rgba(40, 167, 69, 0.1);
}

.bg-info-soft {
    background-color: rgba(23, 162, 184, 0.1);
}

.hover-shadow {
    transition: all 0.3s ease;
}

.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
}

.hover-lift {
    transition: transform 0.2s ease;
}

.hover-lift:hover {
    transform: translateY(-2px);
}

.info-card {
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.info-card:hover {
    background-color: white !important;
    border-color: #667eea;
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.1);
}

.contact-info-item {
    transition: all 0.3s ease;
    padding: 8px;
    border-radius: 8px;
}

.contact-info-item:hover {
    background-color: #f8f9fa;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card {
    animation: fadeInUp 0.5s ease forwards;
}

.card:nth-child(2) {
    animation-delay: 0.1s;
}

.card:nth-child(3) {
    animation-delay: 0.2s;
}

.card:nth-child(4) {
    animation-delay: 0.3s;
}
</style>

<!-- Bootstrap Icons (if not already included) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection