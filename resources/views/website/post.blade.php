@extends('website.header-footer.header-footer')

@section('main')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        

                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <small class="text-muted">
                                    <i class="far fa-calendar-alt me-1"></i> {{ $post->created_at->format('M d, Y') }}
                                </small>
                                <span class="badge {{ $post->status == 'published' ? 'bg-success' : 'bg-secondary' }} rounded-pill" style="font-size: 0.7rem;">
                                    {{ ucfirst($post->status) }}
                                </span>
                            </div>

                            

                            <p class="card-text text-muted small">
                                {!! Str::limit(strip_tags($post->content), 120) !!}
                            </p>
                        </div>

                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <hr class="mt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px; font-size: 12px;">
                                        {{ substr($post->user->name ?? 'A', 0, 1) }}
                                    </div>
                                    <small class="fw-medium text-muted">{{ $post->user->name ?? 'Admin' }}</small>
                                </div>
                                <a href="" class="btn btn-link btn-sm p-0 text-primary fw-bold text-decoration-none">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection