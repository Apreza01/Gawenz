<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gawenz - Professional Task Management System">
    <meta name="author" content="Gawenz">
    <meta name="theme-color" content="#1E293B">

    <title>GAWENZ | {{ $title }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- Custom fonts -->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <style>
        :root {
            --primary-color: #159895;
            --secondary-color: #002B5B;
            --text-color: #1F2937;
            --gray-light: #F3F4F6;
            --white: #FFFFFF;
            --theme-color: #1E293B;
        }

        body {
            font-family: 'Inter', sans-serif !important;
            background-color: #F8FAFC !important;
        }

        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
        }

        .topbar {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            background: var(--white) !important;
        }

        .topbar .nav-item .nav-link {
            color: var(--text-color) !important;
            padding: 0.75rem 1rem !important;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .topbar .nav-item .nav-link:hover {
            background: var(--gray-light);
        }

        .topbar .nav-item .nav-link .fas {
            font-size: 1.1rem;
            color: var(--theme-color);
        }

        .dropdown-menu {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 0.5rem;
            min-width: 12rem;
        }

        .dropdown-item {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-color);
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background: var(--gray-light);
            color: var(--primary-color);
        }

        .dropdown-item i {
            margin-right: 0.75rem;
            color: var(--theme-color);
            font-size: 1rem;
        }

        .navbar-search .form-control {
            border-radius: 12px;
            padding: 1rem 1.25rem;
            border: 1px solid #E5E7EB;
            font-size: 0.95rem;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .navbar-search .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(21, 152, 149, 0.1);
        }

        .navbar-search .btn {
            padding: 0.75rem;
            border-radius: 12px;
            background: var(--gray-light);
            color: var(--theme-color);
            border: none;
            margin-left: 0.5rem;
        }

        .navbar-search .btn:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        .topbar .dropdown-list {
            border-radius: 12px;
            width: 20rem;
        }

        .topbar .dropdown-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            padding: 1rem 1.25rem;
        }

        .topbar .dropdown-list .dropdown-item {
            white-space: normal;
            padding: 1rem;
            border-bottom: 1px solid #E5E7EB;
        }

        .topbar .dropdown-list .dropdown-item:last-child {
            border-bottom: none;
        }

        .topbar .dropdown-user {
            min-width: 14rem;
        }

        .img-profile {
            height: 40px;
            width: 40px;
            border-radius: 12px;
        }

        /* ====================== FIX BUAT SELECT ====================== */
        select,
        select.form-control,
        .form-select {
            height: auto !important;
            min-height: 45px;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            width: 100%;
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            .topbar .dropdown-list {
                width: 100%;
            }
        }
    </style>
</head>
