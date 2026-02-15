<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Admin · Professional Dashboard</title>
    <!-- Bootstrap 5 & Font Awesome (unchanged) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ===== FULLY PROFESSIONAL, SIDEBAR WITH NEW DROPDOWNS ===== */
        body {
            font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
            background-color: #f0f2f5;
            font-weight: 400;
            line-height: 1.5;
            color: #1e293b;
        }

        /* SIDEBAR — deep navy, extended for new sections */
        .sidebar {
            min-height: 100vh;
            width: 290px; /* slightly wider to accommodate new items gracefully */
            background: linear-gradient(170deg, #0b1e2e 0%, #132a3c 100%);
            color: #e6edf3;
            transition: all 0.2s ease;
            box-shadow: 4px 0 12px rgba(0,0,0,0.04);
            border-right: 1px solid rgba(255,255,255,0.03);
            display: flex;
            flex-direction: column;
        }

        .sidebar .p-4.text-center h4 {
            font-weight: 600;
            letter-spacing: 0.3px;
            color: #fff;
            font-size: 1.4rem;
            margin-bottom: 0.25rem;
        }

        .sidebar hr {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin: 1.25rem 0 0.5rem 0;
            opacity: 0.8;
        }

        .sidebar nav {
            flex: 1;
            padding-bottom: 1rem;
        }

        /* base link / button style */
        .sidebar .nav-link, .sidebar .dropdown-toggle {
            color: #b4cdde;
            text-decoration: none;
            padding: 0.7rem 1.5rem;
            display: flex;
            align-items: center;
            font-weight: 450;
            font-size: 0.94rem;
            border-left: 3px solid transparent;
            transition: all 0.18s;
            border-radius: 0 8px 8px 0;
            margin: 0.2rem 0.6rem 0.2rem 0;
            background: transparent;
            border: none;
            width: 100%;
            text-align: left;
        }

        .sidebar .nav-link i, .sidebar .dropdown-toggle i {
            width: 1.6rem;
            text-align: center;
            font-size: 1rem;
            opacity: 0.9;
        }

        .sidebar .nav-link:hover, .sidebar .dropdown-toggle:hover {
            background: #1e3a4e;
            color: #ffffff;
            border-left: 4px solid #7ab7e0;
            background: rgba(42, 84, 110, 0.85);
            backdrop-filter: blur(2px);
        }

        .sidebar .active {
            border-left: 4px solid #78b9e0;
            background: rgba(52, 103, 129, 0.6);
            font-weight: 500;
            color: white;
        }

        /* dropdown menu inner */
        .sidebar .dropdown-menu {
            background: #0e2835;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 16px;
            padding: 0.5rem 0;
            margin-left: 0.8rem;
            margin-top: 0.1rem;
            margin-bottom: 0.2rem;
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.5);
            backdrop-filter: blur(4px);
        }

        .sidebar .dropdown-menu .dropdown-item {
            color: #cbdbe9;
            padding: 0.6rem 1.5rem 0.6rem 2.8rem;
            font-size: 0.88rem;
            display: flex;
            align-items: center;
            background: transparent;
            border-left: 3px solid transparent;
            transition: 0.1s;
        }

        .sidebar .dropdown-menu .dropdown-item i {
            margin-right: 0.7rem;
            width: 1.2rem;
            font-size: 0.82rem;
            opacity: 0.8;
        }

        .sidebar .dropdown-menu .dropdown-item:hover {
            background: #1f4a5c;
            color: white;
            border-left: 4px solid #7ab7e0;
        }

        .sidebar .dropdown-toggle[aria-expanded="true"] {
            background: rgba(42, 84, 110, 0.7);
            border-left: 4px solid #7ab7e0;
        }

        .fa-chevron-down {
            margin-left: auto;
            transition: transform 0.2s;
            font-size: 0.75rem;
            opacity: 0.8;
        }

        .dropdown-toggle[aria-expanded="true"] .fa-chevron-down {
            transform: rotate(180deg);
        }

        /* ----- MAIN CONTENT (unchanged, professional) ----- */
        .content {
            flex: 1;
            background-color: #f7f9fc;
        }

        .navbar {
            background: rgba(255,255,255,0.90);
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.02), 0 1px 2px rgba(0,0,0,0.03);
            border-bottom: 1px solid rgba(255,255,255,0.6);
        }

        .navbar .navbar-brand {
            font-weight: 600;
            color: #0a2c3b;
            letter-spacing: -0.01em;
            font-size: 1.3rem;
        }

        .dropdown .btn-light {
            background: rgba(249, 250, 251, 0.9);
            border: 1px solid #e2e8f0;
            padding: 0.5rem 1.2rem;
            border-radius: 40px;
            font-weight: 500;
            color: #1e3a4e;
        }

        /* stat cards */
        .card-stat {
            border: none;
            border-radius: 24px;
            padding: 1.5rem 1.2rem !important;
            transition: all 0.25s cubic-bezier(0.02, 0.8, 0.2, 1);
            box-shadow: 0 8px 18px rgba(0,0,0,0.02), 0 1px 3px rgba(0,0,0,0.02);
            position: relative;
            overflow: hidden;
        }

        .card-stat:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 30px -8px rgba(0,45,65,0.14);
        }

        .card-stat h6 {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            opacity: 0.9;
            margin-bottom: 0.5rem;
        }

        .card-stat h2 {
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 0;
            line-height: 1.1;
        }

        .card-stat i {
            position: absolute;
            right: 1.2rem;
            top: 1.2rem;
            font-size: 2.4rem !important;
            opacity: 0.2 !important;
            color: white;
        }

        .bg-primary { background: linear-gradient(145deg, #2563eb, #1e4b8f) !important; }
        .bg-success { background: linear-gradient(145deg, #0e7b5e, #0a5d47) !important; }
        .bg-info { background: linear-gradient(145deg, #197e9c, #0f5a70) !important; }
        .bg-warning { background: linear-gradient(145deg, #eab308, #b78a0c) !important; }
        .bg-warning.text-dark h2, .bg-warning.text-dark h6 { color: #0f172a !important; font-weight: 700; }
        .bg-warning i { color: #1e293b; opacity: 0.25 !important; }

        .shadow-sm {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.04), 0 2px 4px rgba(0,0,0,0.02) !important;
            border: none !important;
            border-radius: 24px;
            background: rgba(255,255,255,0.98);
        }

        .card.p-4 h5 {
            font-weight: 650;
            color: #0c2b3b;
            border-left: 6px solid #5fa3ce;
            padding-left: 1rem;
            font-size: 1.25rem;
        }

        .table {
            color: #1e2f3e;
            border-collapse: separate;
            border-spacing: 0 0.5rem;
        }

        .table thead th {
            background-color: #f8fafd;
            border-bottom: 2px solid #e5ecf0;
            color: #2d4d62;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            padding: 0.9rem 0.75rem;
            border: none;
        }

        .table tbody tr {
            background: white;
            border-radius: 16px;
            transition: 0.12s;
            box-shadow: 0 2px 6px rgba(0,0,0,0.01);
        }

        .table tbody td {
            padding: 1rem 0.75rem;
            vertical-align: middle;
            border: none;
            background: white;
        }

        .table tbody tr:hover {
            background: #f3f9ff;
            box-shadow: 0 8px 14px rgba(30,64,93,0.05);
        }

        .badge.bg-success { background: linear-gradient(145deg, #1f9a7a, #0e765c) !important; font-weight: 500; padding: 0.5rem 1rem; border-radius: 40px; }
        .badge.bg-warning.text-dark { background: linear-gradient(145deg, #fcd34d, #fbbf24) !important; color: #2d3748 !important; font-weight: 600; padding: 0.5rem 1rem; border-radius: 40px; }

        .btn-outline-primary {
            border: 1px solid #b8d1e0;
            color: #1e4f6b;
            font-weight: 550;
            padding: 0.35rem 1.1rem;
            border-radius: 30px;
            background: transparent;
            font-size: 0.8rem;
        }

        .btn-outline-primary:hover {
            background: #1e4f6b;
            border-color: #1e4f6b;
            color: white;
        }

        .container-fluid.p-4 { max-width: 1400px; }
        .d-flex { background: #f0f2f5; }

        .pb-20px  {
    padding-top: 40px;
    padding-bottom: 40px;
}
    </style>
</head>
<body>

<div class="d-flex">
    <!-- ===== SIDEBAR WITH ALL REQUIRED SECTIONS ===== -->
    <!-- Including: Job Posts, Notice, Department, Event Participants — each with Add/Manage dropdowns -->
    <div class="sidebar">
        <div class="p-4 text-center">
            <h4>Alumni Admin</h4>
            <hr>
        </div>
        <nav class="px-0">
            <!-- 1. DASHBOARD (active) -->
            <a href="{{route('admin.dashbard')}}" class="active d-block nav-link" style="border-left: 4px solid #78b9e0;"><i class="fas fa-home me-2"></i> Dashboard</a>
            
            <!-- 2. ALUMNI MEMBERS dropdown -->
            <div class="dropdown">
                <button class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-users me-2"></i> Alumni Members
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('admin.alumni.create')}}"><i class="fas fa-plus-circle"></i> Add Alumni</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.alumni.index')}}"><i class="fas fa-pencil-alt"></i> Manage Alumni</a></li>
                </ul>
            </div>
            
            <!-- 3. EVENTS dropdown (standard) -->
            <div class="dropdown">
                <button class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-calendar-alt me-2"></i> Events
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('admin.event.create')}}"><i class="fas fa-plus-circle"></i> Add Event</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.event.index')}}"><i class="fas fa-calendar-check"></i> Manage Events</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.event.participant.index')}}"><i class="fas fa-user-group me-2"></i> Event Participants</a></li>
                </ul>
            </div>

            <!-- 4. JOB POSTS (ADD & MANAGE dropdown) — requested -->
            <div class="dropdown">
                <button class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-briefcase me-2"></i> Job Posts
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('admin.job.post.create')}}"><i class="fas fa-plus-circle"></i> Add Job Post</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.job.post.create')}}"><i class="fas fa-tasks"></i> Manage Jobs</a></li>
                </ul>
            </div>

            <!-- 5. NOTICE (ADD & MANAGE dropdown) — new -->
            <div class="dropdown">
                <button class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bullhorn me-2"></i> Notice
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('admin.notice.create')}}"><i class="fas fa-plus-circle"></i> Add Notice</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.notice.index')}}"><i class="fas fa-edit"></i> Manage Notices</a></li>
                </ul>
            </div>

            <!-- 6. DEPARTMENT (ADD & MANAGE dropdown) — new -->
            <div class="dropdown">
                <button class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-building-columns me-2"></i> Department
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('admin.department.create')}}"><i class="fas fa-plus-circle"></i> Add Department</a></li>
                    <li><a class="dropdown-item" href="{{route('admin.department.index')}}"><i class="fas fa-pencil"></i> Manage Departments</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-newspaper me-2"></i> Post
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.post.create') }}">
                            <i class="fas fa-plus-circle me-2"></i> Add Post
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.post.index') }}">
                            <i class="fas fa-list-ul me-2"></i> Manage Posts
                        </a>
                    </li>
                </ul>
            </div>

            <!-- 8. DONATIONS dropdown (original) -->
            <div class="dropdown">
                <button class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-hand-holding-usd me-2"></i> Donations
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-plus-circle"></i> Add Donation</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-chart-pie"></i> Manage Funds</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- ===== MAIN CONTENT (completely unchanged, only professional look) ===== -->
    <div class="content">
        <nav class="navbar navbar-expand-lg px-4 py-3">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">Dashboard Overview</span>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i> Admin
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        

        

        <div class="container-fluid p-4 pb-20px">
          

            

            <!-- recent alumni table – exactly as before -->
             @yield('main')
        </div>
    </div>
</div>

<!-- Bootstrap JS (dropdowns work) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('alumniChart').getContext('2d');
    const alumniChart = new Chart(ctx, {
        type: 'bar', // আপনি চাইলে 'pie' বা 'doughnut' ও দিতে পারেন
        data: {
            labels: ['Total Alumni', 'Working Alumni', 'Job Openings', 'Upcoming Events'],
            datasets: [{
                label: 'Statistics count',
                data: [1250, 850, 12, 4], // এখানে Working Alumni হিসেবে ৮৫০ ধরা হয়েছে
                backgroundColor: [
                    'rgba(13, 110, 253, 0.7)', // Primary
                    'rgba(25, 135, 84, 0.7)',  // Success
                    'rgba(13, 202, 240, 0.7)', // Info
                    'rgba(255, 193, 7, 0.7)'   // Warning
                ],
                borderColor: [
                    '#0d6efd',
                    '#198754',
                    '#0dcaf0',
                    '#ffc107'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false // লেজেন্ড হাইড করে রাখলাম দেখতে সুন্দর লাগবে বলে
                }
            }
        }
    });
</script>


</body>
</html>

