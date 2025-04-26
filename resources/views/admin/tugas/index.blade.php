@extends('layouts/app')

@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
        {{ $title }}
    </h1>
</div>

<!-- Card -->
<div class="card shadow-sm">
    <!-- Card Header -->
    <div class="card-header bg-white d-flex flex-wrap justify-content-between align-items-center py-3">
        <div class="d-flex align-items-center">
            <a href="{{ route('tugasCreate') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <a href="{{ route('tugasPdf') }}" class="btn btn-danger btn-icon-split" target='__blank'>
                <span class="icon text-white-50">
                    <i class="fas fa-file-pdf"></i>
                </span>
                <span class="text">Export PDF</span>
            </a>
        </div>
    </div>

    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama</th>
                        <th>Tugas</th>
                        <th class="text-center">Tanggal Mulai</th>
                        <th class="text-center">Tanggal Selesai</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tugas as $item)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle">
                                    <span class="initials">{{ substr($item->user->nama, 0, 1) }}</span>
                                </div>
                                <div class="ml-2">
                                    <div class="font-weight-bold">{{ $item->user->nama }}</div>
                                    <div class="text-muted small">{{ $item->user->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="task-content">
                                {{ Str::limit($item->tugas, 100) }}
                                @if(strlen($item->tugas) > 100)
                                    <button class="btn btn-link btn-sm p-0" data-toggle="modal" data-target="#modalTugasShow{{ $item->id }}">
                                        Lihat Selengkapnya
                                    </button>
                                @endif
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge badge-info">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $item->tanggal_mulai }}
                            </span>
                        </td>
                        <td class="text-center">
                            <span class="badge badge-info">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $item->tanggal_selesai }}
                            </span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <button class="btn btn-info btn-sm btn-icon" data-toggle="modal" data-target="#modalTugasShow{{ $item->id }}" title="Lihat Detail">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href="{{ route('tugasEdit', $item->id) }}" class="btn btn-warning btn-sm btn-icon" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm btn-icon" data-toggle="modal" data-target="#modalTugasDestroy{{ $item->id }}" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                            @include('admin/tugas/modal')
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    /* Card Styles */
    .card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .card-header {
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    /* Button Styles */
    .btn-icon-split {
        display: inline-flex;
        align-items: center;
        padding: 0.375rem 0.75rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-icon-split:hover {
        transform: translateY(-1px);
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

    /* Table Styles */
    .table {
        margin-bottom: 0;
    }

    .table thead th {
        background: #f8f9fa;
        border-bottom: 2px solid #e9ecef;
        color: #495057;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        padding: 1rem;
    }

    .table tbody td {
        vertical-align: middle;
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
    }

    .table tbody tr:hover {
        background-color: rgba(0,0,0,0.02);
    }

    /* Badge Styles */
    .badge {
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 6px;
    }

    /* Button Icon Styles */
    .btn-icon {
        width: 32px;
        height: 32px;
        padding: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        margin: 0 2px;
        transition: all 0.3s ease;
    }

    .btn-icon:hover {
        transform: translateY(-1px);
    }

    .btn-group {
        gap: 4px;
    }

    /* Avatar Styles */
    .avatar-circle {
        width: 40px;
        height: 40px;
        background-color: #4e73df;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .initials {
        color: white;
        font-weight: bold;
        font-size: 1rem;
    }

    /* Task Content Styles */
    .task-content {
        max-width: 300px;
        white-space: pre-wrap;
        word-break: break-word;
    }

    .btn-link {
        color: #4e73df;
        text-decoration: none;
        padding: 0;
        font-size: 0.875rem;
    }

    .btn-link:hover {
        color: #2e59d9;
        text-decoration: underline;
    }
</style>
@endsection