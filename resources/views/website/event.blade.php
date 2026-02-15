@extends('website.header-footer.header-footer')

@section('main')

<div class="container mt-5 py-4">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 overflow-hidden">
                <img src="{{ asset('img/1.jpg') }}" class="card-img-top" alt="Event Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-primary">Tech</span>
                        <small class="text-muted"><i class="fas fa-calendar-alt"></i> 15 Oct, 2024</small>
                    </div>
                    <h5 class="card-title fw-bold">Annual Tech Summit 2024</h5>
                    <p class="card-text text-muted small">Join us for the biggest tech event of the year featuring top speakers from Google and Microsoft.</p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <div class="d-grid">
                        <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 overflow-hidden">
                <img src="{{ asset('img/1.jpg') }}" class="card-img-top" alt="Event Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-success">Alumni</span>
                        <small class="text-muted"><i class="fas fa-calendar-alt"></i> 20 Dec, 2024</small>
                    </div>
                    <h5 class="card-title fw-bold">Grand Alumni Get-Together</h5>
                    <p class="card-text text-muted small">Reconnect with your old friends and celebrate the golden memories of our university days.</p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <div class="d-grid">
                        <a href="#" class="btn btn-outline-success btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection