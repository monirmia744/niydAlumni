<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIYD Alumni | complete homepage</title>
    <!-- Bootstrap 5 + Icons + Font Awesome (for footer) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --niyd-primary: #0d2d5c;
            --niyd-secondary: #1e4a82;
            --niyd-accent: #f8b739;
            --niyd-gold: #d4a017;
            --niyd-light: #f0f5ff;
            --niyd-dark: #0a1f3d;
        }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: #f8fafd;
            padding-top: 110px;
            overflow-x: hidden;
        }
        /* ---------- NAVBAR (exactly as given) ---------- */
        .niyd-navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(13, 45, 92, 0.1);
            padding: 0.8rem 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .niyd-navbar.scrolled { padding: 0.5rem 0; background: rgba(255, 255, 255, 0.98); }
        .niyd-logo-container { display: flex; align-items: center; text-decoration: none; transition: transform 0.4s ease; }
        .niyd-logo-container:hover { transform: translateX(5px); }
        .niyd-logo-badge {
            position: relative; width: 60px; height: 60px;
            background: linear-gradient(135deg, var(--niyd-primary), var(--niyd-secondary));
            border-radius: 12px; display: flex; align-items: center; justify-content: center;
            margin-right: 15px; overflow: hidden; box-shadow: 0 4px 12px rgba(13,45,92,0.2);
        }
        .niyd-logo-badge img { width: 80%; height: 80%; object-fit: cover; border-radius: 6px; z-index: 2; }
        .niyd-brand-text { display: flex; flex-direction: column; }
        .niyd-acronym {
            font-size: 28px; font-weight: 900;
            background: linear-gradient(135deg, var(--niyd-primary), var(--niyd-secondary));
            -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1;
        }
        .niyd-tagline { font-size: 10px; font-weight: 700; color: var(--niyd-primary); letter-spacing: 1px; text-transform: uppercase; }
        .niyd-full-name {
            position: relative; padding-left: 10px; margin-left: 10px;
            border-left: 2px solid var(--niyd-accent); color: var(--niyd-dark); line-height: 1.2;
        }
        .niyd-nav-menu { display: flex; list-style: none; margin: 0; padding: 0; }
        .niyd-nav-item { margin: 0 8px; }
        .niyd-nav-link {
            position: relative; color: var(--niyd-dark); text-decoration: none; font-weight: 600;
            font-size: 15px; padding: 12px 18px; border-radius: 10px; display: flex; align-items: center;
            transition: all 0.3s ease; z-index: 1;
        }
        .niyd-nav-link i { margin-right: 8px; }
        .niyd-nav-link::before {
            content: ''; position: absolute; top:0; left:0; right:0; bottom:0;
            background: linear-gradient(135deg, var(--niyd-primary), var(--niyd-secondary));
            border-radius: 10px; opacity: 0; transform: scale(0.8); transition: all 0.4s ease; z-index: -1;
        }
        .niyd-nav-link:hover::before, .niyd-nav-link.active::before { opacity: 1; transform: scale(1); }
        .niyd-nav-link:hover, .niyd-nav-link.active { color: white; }
        .niyd-search-container {
            position: relative; background: white; border-radius: 50px; padding: 8px 20px;
            display: flex; align-items: center; min-width: 200px; border: 2px solid transparent;
            background: linear-gradient(white, white) padding-box,
                        linear-gradient(135deg, var(--niyd-primary), var(--niyd-accent)) border-box;
            transition: all 0.3s ease;
        }
        .niyd-search-input { border: none; outline: none; background: transparent; width: 100%; padding-left: 10px; font-size: 14px; }
        .scroll-progress {
            position: fixed; top: 0; left: 0; width: 0%; height: 3px;
            background: linear-gradient(90deg, var(--niyd-accent), var(--niyd-gold)); z-index: 1001;
        }
        @media (max-width: 991.98px) {
            .niyd-nav-collapse {
                position: absolute; top: 100%; left: 0; right: 0; background: white; padding: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            }
            .niyd-nav-menu { flex-direction: column; }
            .niyd-nav-item { margin: 5px 0; }
        }
        /* ----- stats cards (exactly as given) ----- */
        .transition-up { transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; }
        .transition-up:hover { transform: translateY(-8px); box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important; }
        .bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1); }
        .bg-opacity-10.bg-success { background-color: rgba(25,135,84,0.1)!important; }
        .bg-opacity-10.bg-warning { background-color: rgba(255,193,7,0.1)!important; }
        .bg-opacity-10.bg-info { background-color: rgba(13,202,240,0.1)!important; }

        /* feature cards custom */
        .custom-feature-card {
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            cursor: pointer;
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.08)!important;
        }
        .custom-feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.12) !important;
        }
        .feature-icon-wrapper {
            width: 70px; height: 70px; display: flex; align-items: center; justify-content: center;
            border-radius: 20px;
        }
        .hover-arrow i { transition: transform 0.2s; display: inline-block; }
        .hover-arrow:hover i { transform: translateX(5px); }
        .tracking-wider { letter-spacing: 1px; }

        /* footer styling (exactly as given) */
        .alumni-footer {
            background: #0f172a; color: #e2e8f0; padding: 70px 0 25px; position: relative;
        }
        .alumni-footer h5 { font-weight: 600; margin-bottom: 20px; color: #fff; }
        .footer-brand { font-size: 26px; font-weight: 700; color: #38bdf8; }
        .footer-links { list-style: none; padding: 0; }
        .footer-links li { margin-bottom: 10px; }
        .footer-links a { text-decoration: none; color: #cbd5e1; transition: 0.3s; }
        .footer-links a:hover { color: #38bdf8; padding-left: 5px; }
        .contact-item { margin-bottom: 12px; font-size: 14px; }
        .contact-item i { color: #38bdf8; margin-right: 8px; }
        .social-icons a {
            display: inline-block; width: 38px; height: 38px; line-height: 38px; text-align: center;
            border-radius: 50%; margin-right: 8px; background: rgba(255,255,255,0.08); color: #fff; transition: 0.3s;
        }
        .social-icons a:hover { background: #38bdf8; color: #000; }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.1); margin-top: 40px; padding-top: 20px; font-size: 13px; color: #94a3b8; }

        /* misc */
        .carousel-caption { bottom: 0; top: 0; }
    </style>
</head>
<body>
<!-- scroll progress bar -->
<div class="scroll-progress"></div>

<!-- ========== NAVBAR (exactly from your code) ========== -->
<nav class="niyd-navbar py-4">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <a class="niyd-logo-container" href="{{ route('home') }}">
            <div class="niyd-logo-badge">
                <img src="{{ asset('img/niyd.jpg') }}" alt="">
            </div>
            <div class="niyd-brand-text">
                <span class="niyd-acronym">NIYD</span>
                <span class="niyd-tagline">The nation institute</span>
            </div>
            <div class="niyd-full-name d-none d-xl-block">
                <span class="fw-bold">National Institute of </span><br>
                <small>Youth Development</small>
            </div>
        </a>

        <div class="d-none d-lg-block">
            <ul class="niyd-nav-menu">
                <li class="niyd-nav-item"><a href="{{ route('home') }}" class="niyd-nav-link active"><i class="bi bi-house-door"></i> Home</a></li>
                <li class="niyd-nav-item"><a href="{{ route('alumni') }}" class="niyd-nav-link"><i class="bi bi-people"></i> Alumni</a></li>
                <li class="niyd-nav-item"><a href="{{ route('event') }}" class="niyd-nav-link"><i class="bi bi-calendar-event"></i> Events</a></li>
                <li class="niyd-nav-item"><a href="{{ route('career') }}" class="niyd-nav-link"><i class="bi bi-briefcase"></i> Careers</a></li>
                <li class="niyd-nav-item"><a href="{{ route('post') }}" class="niyd-nav-link"><i class="fas fa-newspaper me-2"></i>Posts</a></li>
                <li class="niyd-nav-item"><a href="{{ route('contact') }}" class="niyd-nav-link"><i class="bi bi-envelope"></i> Contact</a></li>
            </ul>
        </div>

        <div class="d-flex align-items-center gap-3">
            <div class="niyd-search-container d-none d-md-flex">
                <i class="bi bi-search text-primary"></i>
                <input type="text" class="niyd-search-input" id="typing-search" placeholder="Search...">
            </div>
            <button class="btn d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu">
                <i class="bi bi-list fs-2 text-primary"></i>
            </button>
        </div>
    </div>
    <!-- mobile menu collapse -->
    <div class="collapse niyd-nav-collapse d-lg-none" id="mobileMenu">
        <ul class="niyd-nav-menu">
            <li class="niyd-nav-item"><a href="{{ route('home') }}" class="niyd-nav-link active">Home</a></li>
            <li class="niyd-nav-item"><a href="{{ route('post') }}" class="niyd-nav-link">Posts</a></li>
            <li class="niyd-nav-item"><a href="{{ route('alumni') }}" class="niyd-nav-link">Alumni</a></li>
            <li class="niyd-nav-item"><a href="{{ route('event') }}" class="niyd-nav-link">Events</a></li>
            <li class="niyd-nav-item"><a href="{{ route('career') }}" class="niyd-nav-link">Careers</a></li>
            <li class="niyd-nav-item"><a href="{{ route('contact') }}" class="niyd-nav-link">Contact</a></li>
        </ul>
    </div>
</nav>


@yield('main')


<!-- ========== FOOTER (exactly as given) ========== -->
<footer class="alumni-footer">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-3">
                <div class="footer-brand">Alumni Connect</div>
                <p class="mt-3">Connecting graduates, building strong professional networks, and strengthening lifelong relationships between alumni and institution.</p>
                <div class="social-icons mt-3">
                    <a href="https://www.facebook.com/p/%E0%A6%9C%E0%A6%BE%E0%A6%A4%E0%A7%80%E0%A7%9F-%E0%A6%AF%E0%A7%81%E0%A6%AC-%E0%A6%89%E0%A6%A8%E0%A7%8D%E0%A6%A8%E0%A7%9F%E0%A6%A8-%E0%A6%87%E0%A6%A8%E0%A6%B8%E0%A7%8D%E0%A6%9F%E0%A6%BF%E0%A6%9F%E0%A6%BF%E0%A6%89%E0%A6%9F-100071194086742/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://niyd.gov.bd/" target="_blank"><i class="bi bi-globe"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-lg-3">
                <h5>Quick Links</h5>
                <ul class="footer-links">
                    <li>
                        <a href="{{ route('alumni') }}">Alumni Directory</a>
                    </li>
                    <li>
                        <a href="{{ route('event') }}">Events</a>
                    </li>
                    <li>
                        <a href="{{ route('career') }}">Job Portal</a>
                    </li>
                    <li>
                        <a href="{{ route('post') }}">Posts</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h5>Contact Information</h5>
                <div class="contact-item"><i class="fas fa-map-marker-alt"></i> Savar, Dhaka, Bangladesh</div>
                <div class="contact-item"><i class="fas fa-envelope"></i> niydalumni@gmail.com</div>
                <div class="contact-item"><i class="fas fa-phone"></i> +880 1401958744</div>
            </div>
            <div class="col-lg-3 col-md-12">
                <h5 class="fw-bold mb-4">Our Location</h5>
                <div class="rounded-4 overflow-hidden shadow-sm border border-secondary border-opacity-25">
                    <div class="ratio ratio-21x9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29185.839379655954!2d90.23530347431644!3d23.881464299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e99629f6207b%3A0x98c5aa6de597f3a3!2sNational%20Institute%20of%20Youth%20Development!5e0!3m2!1sen!2sbd!4v1771091885396!5m2!1sen!2sbd" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">&copy; <span id="year"></span> NIYD Alumni Management System. All Rights Reserved. <p>Created By <a href="https://github.com/monirmia744" target="_blank">MONIR MIA</a></p></div>
    </div>
</footer>
<!-- scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // scroll progress & navbar scrolled
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.niyd-navbar');
        const progress = document.querySelector('.scroll-progress');
        if (window.scrollY > 50) navbar.classList.add('scrolled'); else navbar.classList.remove('scrolled');
        let winScroll = document.documentElement.scrollTop;
        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        progress.style.width = (winScroll / height) * 100 + "%";
    });

    // typing effect for search
    const searchInput = document.getElementById('typing-search');
    const phrases = ["Search NIYD...", "Find alumni...", "Browse events...", "Search Job...", "Succecss Stories"];
    let i = 0, j = 0, isDeleting = false;
    function type() {
        let current = phrases[i];
        if (isDeleting) { searchInput.placeholder = current.substring(0, j--); if (j < 0) { isDeleting = false; i = (i + 1) % phrases.length; } }
        else { searchInput.placeholder = current.substring(0, j++); if (j > current.length) isDeleting = true; }
        setTimeout(type, isDeleting ? 100 : 150);
    }
    type();

    // footer year
    document.getElementById("year").textContent = new Date().getFullYear();
</script>
</body>
</html>