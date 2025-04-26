<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gawenz | Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        :root {
            --primary-color: #159895;
            --secondary-color: #002B5B;
            --text-color: #1F2937;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
        }

        .card-body {
            padding: 3rem !important;
        }

        .text-gray-900 {
            color: var(--text-color) !important;
            font-size: 1.75rem !important;
            font-weight: 700;
            margin-bottom: 2rem !important;
        }

        .form-control-user {
            border-radius: 12px !important;
            padding: 1rem 1.25rem !important;
            height: auto !important;
            font-size: 1rem !important;
            border: 1px solid #E5E7EB !important;
            transition: all 0.3s ease;
        }

        .form-control-user:focus {
            border-color: var(--primary-color) !important;
            box-shadow: 0 0 0 4px rgba(21, 152, 149, 0.1) !important;
        }

        .btn-user {
            padding: 0.75rem 0 !important;
            font-size: 1rem !important;
            font-weight: 600 !important;
            border-radius: 12px !important;
            margin-top: 1rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
            border: none !important;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease !important;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(21, 152, 149, 0.3) !important;
        }

        .text-danger {
            display: block;
            margin-top: 0.5rem;
            font-size: 0.875rem;
        }

        hr {
            margin: 2rem 0;
            opacity: 0.1;
        }

        .text-center a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .text-center a:hover {
            color: var(--secondary-color);
        }

        .logo-icon {
            font-size: 2rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-right: 0.75rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9CA3AF;
            z-index: 10;
        }

        .has-icon {
            padding-left: 3rem !important;
        }

        @media (max-width: 768px) {
            .card-body {
                padding: 2rem !important;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="text-gray-900">
                                <i class="fas fa-tasks logo-icon"></i>
                                Gawenz
                            </h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('loginProses') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input type="email" 
                                           class="form-control form-control-user has-icon @error('email') is-invalid @enderror"
                                           placeholder="Masukkan Email" 
                                           name="email" 
                                           value="{{ old('email') }}">
                                </div>
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <i class="fas fa-lock input-icon"></i>
                                    <input type="password" 
                                           class="form-control form-control-user has-icon @error('password') is-invalid @enderror"
                                           placeholder="Masukkan Password" 
                                           name="password">
                                </div>
                                @error('password')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Login
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <small>
                                Kembali Ke Beranda?
                                <a href="{{ route('welcome') }}">Klik Disini</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    @session('success')
    <script>
        Swal.fire({
            title: "Sukses",
            text: "{{ session('success') }}",
            icon: "success"
        });
    </script>
    @endsession

    @session('error')
    <script>
        Swal.fire({
            title: "Gagal",
            text: "{{ session('error') }}",
            icon: "error"
        });
    </script>
    @endsession
</body>
</html>