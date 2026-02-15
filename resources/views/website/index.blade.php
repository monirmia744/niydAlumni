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
                            <img src="{{ asset('img/3.jpg') }}" class="d-block w-100" alt="Alumni"
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
                                        <img src="{{ asset('img/1.jpg') }}" class="d-block w-100 object-fit-cover"
                                            style="height: 400px;" alt="Alumni 1">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/2.jpg" class="d-block w-100 object-fit-cover" style="height: 400px;"
                                            alt="Alumni 2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img/3.jpg" class="d-block w-100 object-fit-cover" style="height: 400px;"
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
    </main>



@endsection