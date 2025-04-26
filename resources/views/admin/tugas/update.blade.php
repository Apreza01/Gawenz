@extends('layouts/app')

@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <i class="fas fa-edit mr-2"></i>
        {{ $title }}
    </h1>
    <a href="{{ route('tugas') }}" class="btn btn-secondary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('tugasUpdate', $tugas->id) }}" method="post">
            @csrf

            <div class="row">
                <div class="col-xl-12 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Nama
                        </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" value="{{ $tugas->user->nama }}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-12 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Tugas
                        </label>
                        <textarea name="tugas" rows="5" class="form-control @error('tugas') is-invalid @enderror" placeholder="Masukkan deskripsi tugas">{{ old('tugas', $tugas->tugas) }}</textarea>
                        @error('tugas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-xl-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Tanggal Mulai
                        </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror" value="{{ old('tanggal_mulai', $tugas->tanggal_mulai) }}">
                            @error('tanggal_mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
             
                <div class="col-xl-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Tanggal Selesai
                        </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                            </div>
                            <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" value="{{ old('tanggal_selesai', $tugas->tanggal_selesai) }}">
                            @error('tanggal_selesai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-edit"></i>
                    </span>
                    <span class="text">Update</span>
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    .form-control {
        border-radius: 8px;
        padding: 0.75rem 1rem;
        border: 1px solid #ced4da;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
    }

    .form-control.is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

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

    .input-group-text {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 8px 0 0 8px;
    }

    .input-group .form-control {
        border-radius: 0 8px 8px 0;
    }
</style>
@endsection
