@extends('admin.sideber')

@section('main')


<style>
    /* প্রিমিয়াম ডিজাইন সিস্টেম */
    :root {
        --primary-dark: #0D2D5C;
        --primary-soft: #1e3a6b;
        --success: #059669;
        --warning: #d97706;
        --info: #0891b2;
        --card-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
        --hover-shadow: 0 30px 35px -10px rgba(13, 45, 92, 0.15);
    }

    body {
        background: #f8fafc;
    }

    .stat-card {
        border: none;
        border-radius: 24px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        background: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-dark), var(--primary-soft));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--hover-shadow) !important;
    }

    .stat-card:hover::before {
        opacity: 1;
    }

    .icon-box {
        width: 56px;
        height: 56px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 18px;
        transition: all 0.3s ease;
    }

    .stat-card:hover .icon-box {
        transform: scale(1.1) rotate(5deg);
    }

    .stat-value {
        font-size: 2rem;
        font-weight: 700;
        letter-spacing: -0.02em;
        color: #0f172a;
        line-height: 1.2;
    }

    .stat-label {
        font-size: 0.75rem;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #64748b;
        font-weight: 600;
    }

    .trend-badge {
        background: #ecfdf3;
        color: #067647;
        padding: 4px 8px;
        border-radius: 100px;
        font-size: 0.7rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 4px;
    }

    .chart-container {
        background: #ffffff;
        border-radius: 28px;
        padding: 28px;
        box-shadow: var(--card-shadow);
        border: 1px solid rgba(226, 232, 240, 0.6);
    }

    /* প্রফেশনাল ফিল্টার সিলেক্ট */
    .filter-select {
        border: 1px solid #e2e8f0;
        border-radius: 100px;
        padding: 8px 16px;
        font-size: 0.85rem;
        font-weight: 500;
        color: #1e293b;
        background-color: #ffffff;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .filter-select:hover {
        border-color: var(--primary-dark);
        background-color: #f8fafc;
    }

    .filter-select:focus {
        outline: none;
        border-color: var(--primary-dark);
        box-shadow: 0 0 0 3px rgba(13, 45, 92, 0.1);
    }

    /* প্রিমিয়াম বাটন */
    .premium-btn {
        background: linear-gradient(135deg, var(--primary-dark), var(--primary-soft));
        border: none;
        border-radius: 100px;
        padding: 10px 24px;
        font-weight: 500;
        font-size: 0.9rem;
        letter-spacing: 0.3px;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px -2px rgba(13, 45, 92, 0.2);
    }

    .premium-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 16px -4px rgba(13, 45, 92, 0.25);
        background: linear-gradient(135deg, var(--primary-soft), var(--primary-dark));
    }

    /* গ্রিড লেআউট ইমপ্রুভমেন্ট */
    .dashboard-header {
        padding: 0 12px;
    }

    .stats-grid {
        margin-bottom: 2rem;
    }

    /* ব্যাজ ভেরিয়েন্ট */
    .badge-active {
        background: #e0f2fe;
        color: #0369a1;
        font-weight: 500;
        padding: 4px 12px;
        border-radius: 100px;
        font-size: 0.7rem;
    }
</style>

<div class="container-fluid py-5 bg-light min-vh-100">
    <!-- হেডার সেকশন আরও প্রফেশনাল -->
    <div class="dashboard-header d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="display-6 fw-bold text-dark mb-1" style="letter-spacing: -0.02em;">NIYD Dashboard</h2>
            <p class="text-muted small fw-medium">Welcome back! Track your alumni network performance.</p>
        </div>
        <button class="premium-btn d-flex align-items-center gap-2">
            <i class="bi bi-download"></i>
            <span>Export Report</span>
        </button>
    </div>

    <!-- স্ট্যাটিস্টিক্স কার্ড - আরও প্রিমিয়াম লুক -->
    <div class="row g-4 stats-grid mb-5">
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm h-100 border-0">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="icon-box" style="background: rgba(13, 45, 92, 0.08); color: var(--primary-dark);">
                            <i class="bi bi-people-fill fs-3"></i>
                        </div>
                        <span class="trend-badge">
                            <i class="bi bi-arrow-up-short"></i> +12%
                        </span>
                    </div>
                    <h4 class="stat-value mb-1">{{ number_format($totalAlumni) }}</h4>
                    <p class="stat-label mb-0">Total Alumni</p>
                    <small class="text-muted mt-2 d-block">↑ 156 new this month</small>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm h-100 border-0">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="icon-box" style="background: rgba(5, 150, 105, 0.08); color: #059669;">
                            <i class="bi bi-briefcase-fill fs-3"></i>
                        </div>
                        <span class="trend-badge">
                            <i class="bi bi-arrow-up-short"></i> +8%
                        </span>
                    </div>
                    <h4 class="stat-value mb-1">{{ number_format($workingAlumni) }}</h4>
                    <p class="stat-label mb-0">Employed</p>
                    <small class="text-muted mt-2 d-block">{{ round(($workingAlumni/$totalAlumni)*100) }}% employment rate</small>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm h-100 border-0">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="icon-box" style="background: rgba(217, 119, 6, 0.08); color: #d97706;">
                            <i class="bi bi-calendar-check-fill fs-3"></i>
                        </div>
                        <span class="badge-active">2024</span>
                    </div>
                    <h4 class="stat-value mb-1">{{ $annualEvents }}</h4>
                    <p class="stat-label mb-0">Active Events</p>
                    <small class="text-muted mt-2 d-block">Next: Alumni Meet 2024</small>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm h-100 border-0">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="icon-box" style="background: rgba(8, 145, 178, 0.08); color: #0891b2;">
                            <i class="bi bi-megaphone-fill fs-3"></i>
                        </div>
                        <span class="badge-active">Hiring</span>
                    </div>
                    <h4 class="stat-value mb-1">{{ $jobPostings }}</h4>
                    <p class="stat-label mb-0">Job Circulars</p>
                    <small class="text-muted mt-2 d-block">{{ $jobPostings }} companies hiring</small>
                </div>
            </div>
        </div>
    </div>

    <!-- চার্ট সেকশন আরও প্রফেশনাল -->
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="chart-container">
                <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom border-light">
                    <div>
                        <h5 class="fw-bold m-0 text-dark" style="font-size: 1.25rem;">Analytics Overview</h5>
                        <small class="text-muted">Real-time alumni network insights</small>
                    </div>
                    <select class="filter-select">
                        <option>Last 12 months</option>
                        <option>Last 30 days</option>
                        <option>Last 7 days</option>
                    </select>
                </div>
                <div style="height: 380px; position: relative;">
                    <canvas id="adminStatsChart"></canvas>
                </div>
                <!-- স্ট্যাটিস্টিকাল সামারি -->
                <div class="row mt-4 pt-3 text-center">
                    <div class="col-3">
                        <small class="text-muted d-block">Total Records</small>
                        <span class="fw-bold text-dark">{{ number_format($totalAlumni + $annualEvents + $jobPostings) }}</span>
                    </div>
                    <div class="col-3">
                        <small class="text-muted d-block">Employment %</small>
                        <span class="fw-bold text-dark">{{ round(($workingAlumni/$totalAlumni)*100) }}%</span>
                    </div>
                    <div class="col-3">
                        <small class="text-muted d-block">Events This Year</small>
                        <span class="fw-bold text-dark">{{ $annualEvents }}</span>
                    </div>
                    <div class="col-3">
                        <small class="text-muted d-block">Active Jobs</small>
                        <span class="fw-bold text-dark">{{ $jobPostings }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- বুটস্ট্র্যাপ আইকন CDN (যদি না থাকে) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('adminStatsChart').getContext('2d');
        
        // প্রিমিয়াম গ্র্যাডিয়েন্ট
        const primaryGradient = ctx.createLinearGradient(0, 0, 0, 400);
        primaryGradient.addColorStop(0, '#0D2D5C');
        primaryGradient.addColorStop(0.6, '#1e3a6b');
        primaryGradient.addColorStop(1, '#2d4a7c');

        // ডাটা ভ্যালু গুলো
        const chartData = [
            {{ $totalAlumni }}, 
            {{ $workingAlumni }}, 
            {{ $annualEvents }}, 
            {{ $jobPostings }}
        ];

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total Alumni', 'Currently Employed', 'Annual Events', 'Job Postings'],
                datasets: [{
                    data: chartData,
                    backgroundColor: [
                        primaryGradient,
                        '#059669',
                        '#d97706',
                        '#0891b2'
                    ],
                    borderRadius: 16,
                    barThickness: 48,
                    hoverBackgroundColor: [
                        '#0a1e3c',
                        '#047857',
                        '#b45309',
                        '#0e7490'
                    ],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#0f172a',
                        titleColor: '#f1f5f9',
                        bodyColor: '#cbd5e1',
                        padding: 14,
                        cornerRadius: 12,
                        displayColors: true,
                        borderColor: '#334155',
                        borderWidth: 1
                    }
                },
                scales: {
                    y: { 
                        beginAtZero: true,
                        grid: { 
                            color: '#e2e8f0',
                            drawBorder: false,
                            lineWidth: 1
                        },
                        border: { display: false },
                        ticks: { 
                            stepSize: Math.ceil(Math.max(...chartData) / 5),
                            font: { size: 12, weight: '500' }, 
                            color: '#475569'
                        }
                    },
                    x: { 
                        grid: { display: false },
                        border: { display: false },
                        ticks: { 
                            font: { size: 12, weight: '600' }, 
                            color: '#334155'
                        }
                    }
                },
                layout: {
                    padding: {
                        top: 20,
                        bottom: 10
                    }
                }
            }
        });
    });
</script>


@endsection