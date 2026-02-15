@extends('website.header-footer.header-footer')

@section('main')
<section class="bg-dark-subtle py-5 px-5">
    <div class="container">
        <div class="row">
            @foreach($job_posts as $job)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm p-3">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between mb-3">
                                @if($job->approval_status == 'approved')
                                    <span class="badge bg-warning text-dark">Urgent Hire</span>
                                @else
                                    <span class="badge bg-secondary">Pending</span>
                                @endif
                                <button class="btn btn-link p-0 text-muted"><i class="far fa-bookmark"></i></button>
                            </div>

                            <h5 class="fw-bold mb-1">{{ $job->job_title }}</h5>
                            <p class="text-primary small mb-3">{{ $job->company_name }}</p>
                            
                            <div class="mb-4">
                                <span class="badge bg-light text-dark border me-1">{{ $job->job_location }}</span>
                                <span class="badge bg-light text-dark border me-1">{{ $job->employment_type }}</span>
                                <span class="badge bg-light text-dark border me-1">{{ $job->experience_level }}</span>
                            </div>

                            <p class="card-text text-muted small mb-4">
                                {{ Str::limit($job->job_description, 100) }} </p>

                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="fw-bold text-success">
                                    {{ $job->salary_range ?? 'Negotiable' }}
                                </span>
                                <a href="" class="btn btn-outline-dark btn-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection