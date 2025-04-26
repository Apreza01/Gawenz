@extends('layouts/app')

@section('content')
<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
        {{ $title }}
    </h1>
    <a href="{{ route('tugas') }}" class="btn btn-secondary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">Kembali</span>
    </a>
</div>

<!-- Card -->
<div class="card shadow-sm">
    <!-- Card Body -->
    <div class="card-body">
        <form action="{{ route('tugasStore') }}" method="post">
            @csrf

            <div class="row">
                <!-- User Selection -->
                <div class="col-xl-12 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Nama
                        </label>
                        <select name="user_id" class="form-control select2 @error('user_id') is-invalid @enderror">
                            <option selected disabled>-- Pilih Nama --</option>
                            @foreach ($user as $item)
                            <option value="{{ $item->id}}" {{ old('user_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->nama }} ({{ $item->email }})
                            </option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <!-- Task Description -->
                <div class="col-xl-12 mb-4">
                    <div class="form-group">
                        <label class="form-label">
                            <span class="text-danger">*</span> Tugas
                        </label>
                        <textarea name="tugas" rows="5" class="form-control @error('tugas') is-invalid @enderror" placeholder="Masukkan deskripsi tugas">{{ old('tugas') }}</textarea>
                        @error('tugas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <!-- Start Date -->
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
                            <input type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror" value="{{ old('tanggal_mulai') }}">
                            @error('tanggal_mulai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
             
                <!-- End Date -->
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
                            <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" value="{{ old('tanggal_selesai') }}">
                            @error('tanggal_selesai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Simpan</span>
                </button>
            </div>
        </form>
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

    /* Form Label Styles */
    .form-label {
        font-weight: 500;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    /* Form Control Styles */
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

    /* Invalid Feedback Styles */
    .invalid-feedback {
        font-size: 0.875rem;
        margin-top: 0.25rem;
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

    /* Input Group Styles */
    .input-group-text {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 8px 0 0 8px;
    }

    .input-group .form-control {
        border-radius: 0 8px 8px 0;
    }

    /* Select2 Styles */
    .select2-container--default .select2-selection--single {
        height: auto;
        padding: 0.75rem 1rem;
        border: 1px solid #ced4da;
        border-radius: 8px;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 1.5;
        padding: 0;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 100%;
    }
</style>

@push('scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2({
            theme: 'bootstrap4',
            width: '100%'
        });
    });
</script>
@endpush
@endsection
