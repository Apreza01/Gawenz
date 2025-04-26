@extends('layouts/app')

@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
        {{ $title }}
    </h1>
    @if (auth()->user()->is_tugas == true)
    <a href="{{ route('tugasPdf') }}" class="btn btn-danger btn-icon-split" target='__blank'>
        <span class="icon text-white-50">
            <i class="fas fa-file-pdf"></i>
        </span>
        <span class="text">PDF</span>
    </a>
    @endif
</div>

<div class="card shadow-sm">
    <div class="card-body">
        @if (auth()->user()->is_tugas == true)
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="info-box">
                        <div class="info-box-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text text-muted">Nama Karyawan</span>
                            <span class="info-box-number">{{ $tugas->user->nama }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <div class="info-box-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text text-muted">Email</span>
                            <span class="info-box-number">
                                <span class="badge badge-primary">{{ $tugas->user->email }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="info-box">
                        <div class="info-box-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text text-muted">Tugas</span>
                            <span class="info-box-number">{{ $tugas->tugas }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="info-box">
                        <div class="info-box-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text text-muted">Tanggal Mulai</span>
                            <span class="info-box-number">
                                <span class="badge badge-info">{{ $tugas->tanggal_mulai }}</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <div class="info-box-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="info-box-content">
                            <span class="info-box-text text-muted">Tanggal Selesai</span>
                            <span class="info-box-number">
                                <span class="badge badge-info">{{ $tugas->tanggal_selesai }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-5">
                <div class="empty-state">
                    <div class="empty-state-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="text-gray-600">Belum Ditugaskan</h3>
                    <p class="text-muted">Anda belum memiliki tugas yang ditetapkan.</p>
                </div>
            </div>
        @endif
    </div>
</div>

<style>
    .info-box {
        background: #fff;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        border: 1px solid rgba(0,0,0,0.05);
    }

    .info-box:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .info-box-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0,0,0,0.03);
        border-radius: 10px;
        margin-right: 1rem;
        color: #4A5568;
        font-size: 1.25rem;
    }

    .info-box-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .info-box-text {
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
        color: #718096;
    }

    .info-box-number {
        font-size: 1.25rem;
        font-weight: 600;
        color: #2D3748;
    }

    .empty-state {
        padding: 3rem;
    }

    .empty-state-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0,0,0,0.03);
        border-radius: 50%;
        color: #718096;
        font-size: 2.5rem;
    }

    .badge {
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 6px;
    }

    .card {
        border: none;
        border-radius: 16px;
        overflow: hidden;
    }

    .card-body {
        padding: 2rem;
    }

    .btn-icon-split {
        display: inline-flex;
        align-items: center;
        padding: 0.375rem 0.75rem;
        border-radius: 8px;
    }

    .btn-icon-split .icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2rem;
        height: 100%;
        margin-right: 0.5rem;
    }

    .btn-icon-split .text {
        display: inline-block;
    }
</style>
@endsection