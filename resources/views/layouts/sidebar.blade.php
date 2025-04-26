<!-- Sidebar -->
<style>
    .sidebar {
        background: linear-gradient(180deg, #1E293B, #0F172A) !important;
        box-shadow: 4px 0 15px rgba(0, 0, 0, 0.1);
        width: 280px !important;
        min-width: 280px !important;
    }

    .sidebar.toggled {
        width: 6.5rem !important;
        min-width: 6.5rem !important;
    }

    .sidebar-brand {
        background: rgba(255, 255, 255, 0.05);
        margin: 1rem;
        border-radius: 12px;
        padding: 1.25rem !important;
        transition: all 0.3s ease;
    }

    .sidebar-brand:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
    }

    .sidebar-brand-icon i {
        font-size: 2rem;
        background: linear-gradient(135deg, #159895, #002B5B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-right: 0.5rem;
    }

    .sidebar-brand-text {
        font-weight: 700 !important;
        letter-spacing: 0.05em;
        font-size: 1.4rem !important;
    }

    .sidebar-divider {
        border-color: rgba(255, 255, 255, 0.1);
        margin: 1rem;
    }

    .sidebar-heading {
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        letter-spacing: 0.05em;
        color: rgba(255, 255, 255, 0.7) !important;
        padding: 0 1rem;
    }

    .nav-item {
        margin: 0.35rem 1rem;
    }

    .nav-link {
        border-radius: 12px;
        padding: 1.15rem 1.25rem !important;
        font-weight: 500;
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.7) !important;
        transition: all 0.3s ease !important;
    }

    .nav-link i {
        font-size: 1.25rem;
        width: 2rem;
        text-align: center;
        transition: all 0.3s ease;
        opacity: 0.8;
    }

    .nav-link span {
        margin-left: 0.5rem;
    }

    .sidebar.toggled .nav-link {
        padding: 1rem !important;
        text-align: center;
    }

    .sidebar.toggled .nav-link i {
        font-size: 1.25rem;
        width: auto;
        margin: 0;
    }

    .sidebar.toggled .nav-item {
        margin: 0.35rem 0.5rem;
    }

    @media (min-width: 768px) {
        .sidebar.toggled {
            overflow: visible;
            width: 6.5rem !important;
        }

        .sidebar.toggled .nav-item .nav-link {
            padding: 1rem !important;
            width: 6.5rem;
        }

        .sidebar.toggled .nav-item .nav-link span {
            display: none;
        }

        .sidebar.toggled .nav-item:last-child {
            margin-bottom: 1rem;
        }
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        color: white !important;
        transform: translateX(5px);
    }

    .nav-link:hover i {
        opacity: 1;
        transform: scale(1.1);
    }

    .nav-item.active .nav-link {
        background: linear-gradient(135deg, rgba(21, 152, 149, 0.2), rgba(0, 43, 91, 0.2));
        color: white !important;
        font-weight: 600;
    }

    .nav-item.active .nav-link i {
        opacity: 1;
        color: #159895;
    }

    #sidebarToggle {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        width: 40px;
        height: 40px;
        transition: all 0.3s ease;
    }

    #sidebarToggle:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: rotate(180deg);
    }

    #sidebarToggle::after {
        color: rgba(255, 255, 255, 0.7);
    }
</style>

<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-tasks"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GAWENZ</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $menuDashboard ?? '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    @if (auth()->user()->jabatan=='Admin')
        <!-- Heading -->
        <div class="sidebar-heading">
            MENU ADMIN
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item {{ $menuAdminUser ?? '' }}">
            <a class="nav-link" href="{{ route('user') }}">
                <i class="fas fa-user"></i>
                <span>Data User</span>
            </a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item {{ $menuAdminTugas ?? '' }}">
            <a class="nav-link" href="{{ route('tugas') }}">
                <i class="fas fa-fw fa-tasks"></i>
                <span>Data Tugas</span>
            </a>
        </li>
    @else
        <!-- Heading -->
        <div class="sidebar-heading">
            MENU KARYAWAN
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item {{ $menuKaryawanTugas ?? '' }}">
            <a class="nav-link" href="{{ route('tugas') }}">
                <i class="fas fa-fw fa-tasks"></i>
                <span>Data Tugas</span>
            </a>
        </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
