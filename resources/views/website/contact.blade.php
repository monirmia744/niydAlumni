@extends('website.header-footer.header-footer')

@section('main')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-0 shadow-lg rounded-5 overflow-hidden">
                <div class="row g-0">
                    
                    <div class="col-md-5 bg-dark p-5 text-white d-flex flex-column justify-content-between">
                        <div>
                            <h2 class="fw-black mb-3 text-primary">Get in Touch</h2>
                            <p class="text-secondary mb-5">Message us to join the alumni network or for any needs.</p>
                            
                            <div class="mb-4 d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-4 me-3">
                                    <i class="bi bi-geo-alt text-primary fs-4"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-secondary text-uppercase fw-bold">Location</p>
                                    <p class="mb-0 fw-semibold">Savar, Dhaka, Bangladesh</p>
                                </div>
                            </div>

                            <div class="mb-4 d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-4 me-3">
                                    <i class="bi bi-envelope-at text-primary fs-4"></i>
                                </div>
                                <div>
                                    <p class="mb-0 small text-secondary text-uppercase fw-bold">Email</p>
                                    <p class="mb-0 fw-semibold">niydalumni@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-light rounded-circle p-2" style="width: 45px; height: 45px;"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-outline-light rounded-circle p-2" style="width: 45px; height: 45px;"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-light rounded-circle p-2" style="width: 45px; height: 45px;"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>

                    <div class="col-md-7 bg-white p-5">
                        <form action="#" method="POST">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light rounded-4" id="name" placeholder="Full Name">
                                        <label for="name" class="text-muted">Your Full Name</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-light rounded-4" id="email" placeholder="Email">
                                        <label for="email" class="text-muted">Email Address</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light rounded-4" id="batch" placeholder="Batch">
                                        <label for="batch" class="text-muted">Batch / Year</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select border-0 bg-light rounded-4" id="subject">
                                            <option selected>General Inquiry</option>
                                            <option value="1">Event Registration</option>
                                            <option value="3">Job Assistance</option>
                                            <option value="2">Others</option>
                                        </select>
                                        <label for="subject">How can we help?</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light rounded-4" placeholder="Message" id="msg" style="height: 150px"></textarea>
                                        <label for="msg" class="text-muted">Write your message here...</label>
                                    </div>
                                </div>

                                <div class="col-12 pt-3">
                                    <button type="submit" class="btn btn-primary w-100 py-3 rounded-4 fw-bold shadow-sm">
                                        Send Message <i class="bi bi-arrow-right-short ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection