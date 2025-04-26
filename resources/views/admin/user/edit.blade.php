@extends('layouts/app')

@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <i class="fas fa-user-edit mr-2"></i>
        {{ $title }}
    </h1>
    <a href="{{ route('user') }}" class="btn btn-secondary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('userUpdate', $user->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-xl-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Nama
                        </label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $user->nama }}" placeholder="Masukkan nama">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-xl-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Email
                        </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}" placeholder="Masukkan email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-xl-12 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Jabatan
                        </label>
                        <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                            <option disabled>-- Pilih Jabatan --</option>
                            <option value="Admin" {{ $user->jabatan=='Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Karyawan" {{ $user->jabatan=='Karyawan' ? 'selected' : '' }}>Karyawan</option>
                        </select>
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-xl-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Password
                        </label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password baru">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-xl-6 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Konfirmasi Password
                        </label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi password baru">
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

    select.form-control {
        appearance: none;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 16px 12px;
        padding-right: 2.5rem;
    }
</style>
@endsection
