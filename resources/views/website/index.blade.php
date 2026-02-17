@extends('website.header-footer.header-footer')
@section('main')


    <!-- ========== MAIN CONTENT (your blade section) ========== -->
    <main>
        <!-- hero carousel (exactly from your section) -->
        <section class="">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="position-relative">
                            <img src="{{ asset('img/6.jpg') }}" class="d-block w-100" alt="Alumni"
                                style="height: 600px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);">
                            </div>
                        </div>
                        <div
                            class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 top-0">
                            <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">Welcome to the NIYD Alumni
                                Association</h1>
                            <p class="fs-4 mb-4 animate__animated animate__fadeInUp">Connecting Alumni, Managing Events,
                                Fostering Career Opportunities.</p>
                            <div class="animate__animated animate__zoomIn">
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 py-2 rounded-pill shadow">Join as Lifetime
                                    Member</a>
                                <a href="#" class="btn btn-outline-light btn-lg px-4 py-2 rounded-pill ms-2">Explore
                                    Events</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="position-relative">
                            <img src="{{ asset('img/5.jpeg') }}" class="d-block w-100" alt="Alumni"
                                style="height: 600px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);">
                            </div>
                        </div>
                        <div
                            class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 top-0">
                            <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">Welcome to the NIYD Alumni
                                Association</h1>
                            <p class="fs-4 mb-4 animate__animated animate__fadeInUp">Connecting Alumni, Managing Events,
                                Fostering Career Opportunities.</p>
                            <div class="animate__animated animate__zoomIn">
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 py-2 rounded-pill shadow">Join as Lifetime
                                    Member</a>
                                <a href="#" class="btn btn-outline-light btn-lg px-4 py-2 rounded-pill ms-2">Explore
                                    Events</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="position-relative">
                            <img src="{{ asset('img/9.jpeg') }}" class="d-block w-100" alt="Alumni"
                                style="height: 600px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.5);">
                            </div>
                        </div>
                        <div
                            class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 top-0">
                            <h1 class="display-3 fw-bold animate__animated animate__fadeInDown">Welcome to the NIYD Alumni
                                Association</h1>
                            <p class="fs-4 mb-4 animate__animated animate__fadeInUp">Connecting Alumni, Managing Events,
                                Fostering Career Opportunities.</p>
                            <div class="animate__animated animate__zoomIn">
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 py-2 rounded-pill shadow">Join as Lifetime
                                    Member</a>
                                <a href="#" class="btn btn-outline-light btn-lg px-4 py-2 rounded-pill ms-2">Explore
                                    Events</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- stats cards row (exactly) -->
        <div class="container my-5">
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3">
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
                <div class="col-sm-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 transition-up">
                        <div class="card-body d-flex align-items-center p-4">
                            <div class="flex-shrink-0 bg-success bg-opacity-10 p-3 rounded-circle me-3"><i
                                    class="bi bi-briefcase-fill text-success fs-3"></i></div>
                            <div>
                                <h4 class="fw-bold mb-0">{{ $workingAlumni }}</h4>
                                <p class="text-muted mb-0 small text-uppercase fw-semibold">Working Alumni</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 transition-up">
                        <div class="card-body d-flex align-items-center p-4">
                            <div class="flex-shrink-0 bg-warning bg-opacity-10 p-3 rounded-circle me-3"><i
                                    class="bi bi-calendar-check-fill text-warning fs-3"></i></div>
                            <div>
                                <h4 class="fw-bold mb-0">{{ $annualEvents }}</h4>
                                <p class="text-muted mb-0 small text-uppercase fw-semibold">Annual Events</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 transition-up">
                        <div class="card-body d-flex align-items-center p-4">
                            <div class="flex-shrink-0 bg-info bg-opacity-10 p-3 rounded-circle me-3"><i
                                    class="bi bi-megaphone-fill text-info fs-3"></i></div>
                            <div>
                                <h4 class="fw-bold mb-0">{{ $jobPostings }}</h4>
                                <p class="text-muted mb-0 small text-uppercase fw-semibold">Job Postings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- about section -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center g-4">

                    <div class="col-md-6">
                        <div class="pe-lg-4">
                            <h2 class="display-6 fw-bold mb-4">About NIYD Alumni Management</h2>
                            <p class="lead text-muted mb-4">
                                NIYD Alumni Management is a digital platform that connects and engages former students of
                                NIYD. It allows alumni to manage their profiles, stay updated with events and announcements,
                                and network with fellow members.
                            </p>
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <div class="bg-primary bg-opacity-10 p-2 rounded-circle">
                                    <i class="bi bi-shield-check text-primary"></i>
                                </div>
                                <p class="mb-0">Secure and organized alumni database management.</p>
                            </div>
                            <div class="d-flex align-items-start gap-3 mb-4">
                                <div class="bg-primary bg-opacity-10 p-2 rounded-circle">
                                    <i class="bi bi-people-fill text-primary"></i>
                                </div>
                                <p class="mb-0">Fostering a strong community between alumni and the institute.</p>
                            </div>
                            <a href="#" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card border-0 shadow-lg overflow-hidden rounded-4">
                            <div id="alumniSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#alumniSlider" data-bs-slide-to="0"
                                        class="active"></button>
                                    <button type="button" data-bs-target="#alumniSlider" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#alumniSlider" data-bs-slide-to="2"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{ asset('img/8 (2).jpg') }}" class="d-block w-100 object-fit-cover"
                                            style="height: 400px;" alt="Alumni 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/6.jpg') }}" class="d-block w-100 object-fit-cover" style="height: 400px;"
                                            alt="Alumni 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('img/8 (1).jpg') }}" class="d-block w-100 object-fit-cover" style="height: 400px;"
                                            alt="Alumni 3">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#alumniSlider"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#alumniSlider"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- exclusive services (feature cards) -->
        <div class="container py-5">
            <div class="text-center mb-5">
                <span
                    class="badge rounded-pill bg-primary bg-opacity-10 text-primary px-3 py-2 mb-3 fw-bold tracking-wider"><i
                        class="bi bi-grid-3x3-gap-fill me-2"></i>ALUMNI DASHBOARD</span>
                <h2 class="display-5 fw-bold mb-2">Exclusive Services for NIYD Alumni</h2>
                <p class="text-secondary fs-5">Everything you need to stay engaged with the NIYD community</p>
            </div>
            <div class="row g-4">
                <div class="col-xl-3 col-md-6">
                    <div class="card h-100 border-0 shadow-sm custom-feature-card">
                        <div class="card-body p-4 text-center">
                            <div class="feature-icon-wrapper mb-4 bg-primary bg-opacity-10 text-primary mx-auto">
                                <i class="bi bi-people-fill fs-3"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Alumni Directory</h3>
                            <p class="small text-secondary mb-4">Find alumni by batch, industry, or region. </p>
                            <a href="{{ route('alumni') }}" class="text-decoration-none fw-bold text-primary hover-arrow">Browse Directory <i
                                    class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card h-100 border-0 shadow-sm custom-feature-card">
                        <div class="card-body p-4 text-center">
                            <div class="feature-icon-wrapper mb-4 bg-warning bg-opacity-10 text-warning mx-auto"><i
                                    class="bi bi-calendar-event-fill fs-3"></i></div>
                            <h3 class="h5 fw-bold mb-3">Events & Meetups</h3>
                            <p class="small text-secondary mb-4">Stay updated with upcoming reunions, seminars, and
                                networking galas hosted by NIYD.</p><a href="{{ route('event') }}"
                                class="text-decoration-none fw-bold text-warning hover-arrow">View Events <i
                                    class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card h-100 border-0 shadow-sm custom-feature-card">
                        <div class="card-body p-4 text-center">
                            <div class="feature-icon-wrapper mb-4 bg-success bg-opacity-10 text-success mx-auto"><i
                                    class="bi bi-briefcase-fill fs-3"></i></div>
                            <h3 class="h5 fw-bold mb-3">Job Postings</h3>
                            <p class="small text-secondary mb-4">Access exclusive career opportunities and high-profile job
                                circulars from our partner firms.</p><a href="{{ route('career') }}"
                                class="text-decoration-none fw-bold text-success hover-arrow">Explore Jobs <i
                                    class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card h-100 border-0 shadow-sm custom-feature-card">
                        <div class="card-body p-4 text-center">
                            <div class="feature-icon-wrapper mb-4 bg-info bg-opacity-10 text-info mx-auto"><i
                                    class="bi bi-chat-quote-fill fs-3"></i></div>
                            <h3 class="h5 fw-bold mb-3">Success Stories</h3>
                            <p class="small text-secondary mb-4">Share your journey or read inspiring success stories and
                                research posts from your peers.</p><a href="{{ route('post') }}"
                                class="text-decoration-none fw-bold text-info hover-arrow">Read Posts <i
                                    class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <section class="container my-5">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="d-inline-block bg-primary bg-opacity-10 text-primary px-3 py-1 rounded-pill small fw-bold mb-3">
                <i class="bi bi-search me-1"></i>Find Your Alumni
            </span>
            <h3 class="fw-bold mb-3">Search & Filter Alumni</h3>
            <p class="text-muted w-75 mx-auto">Browse through our alumni network by department, batch, or year</p>
        </div>

        <!-- Main Search Card -->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="card border-0 shadow p-4 p-lg-5 rounded-4 bg-white">
                    <form action="{{ route('home') }}" method="GET">
                        <!-- Filter Chips - Moved inside for better flow -->
                        <div class="d-flex justify-content-center gap-2 mb-4">
                            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">
                                <i class="bi bi-funnel me-1"></i>Advanced Filters
                            </span>
                            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">
                                <i class="bi bi-clock me-1"></i>Real-time Results
                            </span>
                        </div>

                        <div class="row g-4 align-items-end">
                            <!-- Department Select -->
                            <div class="col-md-6 col-lg-4">
                                <label class="form-label fw-semibold text-dark mb-2">
                                    <i class="bi bi-building text-primary me-1"></i>
                                    Department
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-diagram-3"></i>
                                    </span>
                                    <select class="form-select bg-light border-0" name="department" onchange="this.form.submit()">
                                        {{-- কোনো কিছু সিলেক্ট করা না থাকলে এটি দেখাবে --}}
                                        <option value="" {{ request('department') == '' ? 'selected' : '' }}>--Select Department--</option>
                                        
                                        {{-- সব অ্যালামনাই দেখানোর জন্য --}}
                                        <option value="all" {{ request('department') == 'all' ? 'selected' : '' }}>All Alumni / Departments</option>
                                        
                                        {{-- লুপের মাধ্যমে ডিপার্টমেন্টগুলো আসবে --}}
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->name }}" {{ request('department') == $department->name ? 'selected' : '' }}>
                                                {{ $department->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Batch Select -->
                            <div class="col-md-6 col-lg-3">
                                <label class="form-label fw-semibold text-dark mb-2">
                                    <i class="bi bi-calendar-check text-primary me-1"></i>
                                    Batch
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-people"></i>
                                    </span>
                                    <select class="form-select bg-light border-0" name="batch" onchange="this.form.submit()">
                                        <option value="">Choose batch...</option> 
                                        @foreach ($batchs as $batch)
                                            <option value="{{ $batch->batch }}" {{ request('batch') == $batch->batch ? 'selected' : '' }}>
                                                {{ $batch->batch }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Year Select -->
                            <div class="col-md-6 col-lg-3">
                                <label class="form-label fw-semibold text-dark mb-2">
                                    <i class="bi bi-calendar-event text-primary me-1"></i>
                                    Passing Year
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="bi bi-clock"></i>
                                    </span>
                                    <select class="form-select bg-light border-0" name="year" onchange="this.form.submit()">
                                        <option value="">Select year...</option>
                                        @foreach ($years as $year)
                                            <option value="{{ $year->batch_year }}" {{ request('year') == $year->batch_year ? 'selected' : '' }}>
                                                {{ $year->batch_year }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- Search Button -->
                            <div class="col-md-6 col-lg-2">
                                <label class="form-label fw-semibold text-dark mb-2 opacity-0">Search</label>
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                                    <i class="bi bi-search me-2"></i>
                                    Search
                                </button>
                            </div>
                        </div>

                        <!-- Quick Filter Links -->
                    </form>

                    <div class="row py-5">
                        @forelse ($alumniResults as $alumni)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100 shadow border-0 rounded-4 overflow-hidden">
                                    <div class="bg-light">
                                        <img src="{{ $alumni->image ? asset($alumni->image) : asset('assets/default-user.png') }}" 
                                            class="card-img-top" style="height: 250px; object-fit: cover;" alt="Alumni">
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
                                        <div class="card-footer bg-white border-0 p-3">
                                            <a href="{{ route('website.alumni.details', $alumni->id) }}" class="btn btn-primary w-100 rounded-pill fw-bold">View Full Profile</a>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <div class="mb-3">
                                    <i class="bi bi-people text-muted" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="text-muted">No alumni profiles to display.</h5>
                                <p class="text-secondary small">Please select a department, batch, or year to start searching.</p>
                            </div>
                        @endforelse
                    </div>

                    
                </div>

                <!-- Status Bar -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="d-flex gap-4">
                        <span class="small text-muted">
                            <i class="bi bi-check-circle-fill text-success me-1"></i>
                            {{ $foundCount }} alumni found
                        </span>
                        <span class="small text-muted">
                            <i class="bi bi-arrow-repeat me-1"></i>
                            Updated live
                        </span>
                    </div>
                    <a href="{{ route('home') }}" class="text-decoration-none small text-primary fw-semibold">
                        <i class="bi bi-x-circle me-1"></i>
                        Clear all filters
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    </main>



@endsection