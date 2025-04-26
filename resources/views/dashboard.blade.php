@extends('layouts/app')

@section('content')
<style>
    .dashboard-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
    }

    .dashboard-title i {
        font-size: 1.5rem;
        margin-right: 0.75rem;
        background: linear-gradient(135deg, #159895, #002B5B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .stat-card {
        border: none !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05) !important;
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
    }

    .stat-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        pointer-events: none;
    }

    .border-left-primary {
        border-left: none !important;
        background: linear-gradient(135deg, #4F46E5, #3730A3);
    }

    .border-left-dark {
        border-left: none !important;
        background: linear-gradient(135deg, #1E293B, #0F172A);
    }

    .border-left-info {
        border-left: none !important;
        background: linear-gradient(135deg, #06B6D4, #0891B2);
    }

    .border-left-success {
        border-left: none !important;
        background: linear-gradient(135deg, #10B981, #059669);
    }

    .border-left-danger {
        border-left: none !important;
        background: linear-gradient(135deg, #EF4444, #DC2626);
    }

    .stat-card .card-body {
        padding: 1.5rem !important;
    }

    .stat-card .text-xs {
        font-size: 0.875rem !important;
        font-weight: 600 !important;
        letter-spacing: 0.05em;
        color: rgba(255, 255, 255, 0.9) !important;
    }

    .stat-card .h5 {
        font-size: 1.5rem !important;
        font-weight: 700 !important;
        color: white !important;
        margin-top: 0.5rem;
    }

    .stat-card .text-gray-300 {
        color: rgba(255, 255, 255, 0.5) !important;
    }

    .stat-card i {
        font-size: 2.5rem !important;
        opacity: 0.8;
        transition: all 0.3s ease;
    }

    .stat-card:hover i {
        transform: scale(1.1) rotate(5deg);
        opacity: 1;
    }

    .badge {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
        font-weight: 600;
        border-radius: 9999px;
    }

    .badge-success {
        background: #059669;
        color: white;
    }

    .badge-danger {
        background: #DC2626;
        color: white;
    }

    @media (max-width: 768px) {
        .stat-card {
            margin-bottom: 1rem;
        }
    }
</style>

<!-- Page Heading -->
<h1 class="dashboard-title">
    <i class="fas fa-tachometer-alt"></i>
    {{ $title }}
</h1>

<div class="row">
    @if (auth()->user()->jabatan =='Admin')
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card border-left-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-1">Total User</div>
                            <div class="h5 mb-0">{{ $jumlahUser }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card border-left-dark">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-1">Total Admin</div>
                            <div class="h5 mb-0">{{ $jumlahAdmin }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-secret text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card border-left-info">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-1">Total Karyawan</div>
                            <div class="h5 mb-0">{{ $jumlahKaryawan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-plus text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card border-left-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-1">Total Ditugaskan</div>
                            <div class="h5 mb-0">{{ $jumlahDitugaskan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-1">Total Belum Ditugaskan</div>
                            <div class="h5 mb-0">{{ $jumlahBelumDitugaskan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (auth()->user()->jabatan == 'Karyawan' && auth()->user()->is_tugas == true)
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card stat-card border-left-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-1">Status</div>
                            <div class="h5 mb-0">
                                <span class="badge badge-success">Ditugaskan</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thumbs-up text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (auth()->user()->jabatan == 'Karyawan' && auth()->user()->is_tugas == false)
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card stat-card border-left-danger">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs text-uppercase mb-1">Status</div>
                            <div class="h5 mb-0">
                                <span class="badge badge-danger">Belum Ditugaskan</span>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-spinner text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection