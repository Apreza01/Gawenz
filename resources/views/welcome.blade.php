<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Gawenz | Beranda</title>
  <meta name="description" content="Professional task management system">
  <meta name="keywords" content="task management, team collaboration, project management">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('enno/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('enno/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('enno/assets/vendor/aos/aos.css') }}" rel="stylesheet">

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
      font-family: 'Inter', sans-serif;
      color: var(--text-color);
      line-height: 1.5;
    }

    /* Header Fixes */
    .header {
      background: linear-gradient(to right, #1E293B, #0F172A);
      padding: 1rem 0;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 1000;
    }

    .header .container-fluid {
      max-width: 1320px;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .logo img {
      height: 40px;
      width: auto;
    }

    .sitename {
      color: var(--white);
      font-size: 1.75rem;
      font-weight: 700;
      margin: 0;
      letter-spacing: -0.5px;
    }

    .navmenu {
      display: flex;
      align-items: center;
      gap: 3rem;
    }

    .navmenu ul {
      display: flex;
      gap: 2.5rem;
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .navmenu a {
      color: var(--white);
      text-decoration: none;
      font-weight: 500;
      padding: 0.5rem 0;
      transition: all 0.3s ease;
      position: relative;
    }

    .navmenu a:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      background: var(--primary-color);
      left: 0;
      bottom: 0;
      transition: width 0.3s ease;
    }

    .navmenu a:hover:after {
      width: 100%;
    }

    .navmenu a:hover {
      color: var(--primary-color);
    }

    .btn-getstarted {
      background: linear-gradient(135deg, var(--primary-color), #1A7472);
      color: var(--white) !important;
      padding: 1rem 2rem !important;
      border-radius: 12px;
      font-weight: 600;
      font-size: 1.1rem;
      text-decoration: none;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      border: none;
      outline: none;
      position: relative;
      overflow: hidden;
      z-index: 1;
      box-shadow: 0 4px 15px rgba(21, 152, 149, 0.3);
    }

    .btn-getstarted:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(21, 152, 149, 0.4);
      background: linear-gradient(135deg, var(--secondary-color), #001B3B);
    }

    .btn-getstarted:after {
      display: none;
    }

    @media (max-width: 991px) {
      .header {
        padding: 1rem 0;
      }

      .header .container-fluid {
        padding: 0 1rem;
      }

      .navmenu {
        position: fixed;
        top: 71px;
        left: -100%;
        width: 100%;
        height: calc(100vh - 71px);
        background: var(--white);
        flex-direction: column;
        padding: 2rem;
        transition: 0.3s;
        gap: 2rem;
      }

      .navmenu.active {
        left: 0;
      }

      .navmenu ul {
        flex-direction: column;
        text-align: center;
        gap: 1.5rem;
      }

      .mobile-nav-toggle {
        display: block;
        font-size: 1.5rem;
        cursor: pointer;
        color: var(--text-color);
      }
    }

    /* Hero Section */
    .hero {
      padding: 8rem 0 6rem;
      background: var(--white);
      min-height: calc(100vh - 80px);
      display: flex;
      align-items: center;
    }

    .hero .row {
      align-items: center;
    }

    .hero::before {
      display: none;
    }

    .hero::after {
      display: none;
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: 800;
      line-height: 1.1;
      margin-bottom: 1.5rem;
      background: linear-gradient(to right, var(--secondary-color), var(--primary-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: -1px;
    }

    .hero-text {
      font-size: 1.25rem;
      color: #4B5563;
      margin-bottom: 2.5rem;
      line-height: 1.7;
    }

    .hero-img {
      max-width: 100%;
      margin: 0 auto;
      display: block;
    }

    .visual-container {
      position: relative;
      width: 100%;
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .task-card {
      background: var(--white);
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
      width: 280px;
      position: absolute;
      transition: all 0.5s ease;
      animation: cardFloat 3s ease-in-out infinite;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .task-card:nth-child(1) {
      transform: rotate(-15deg) translateX(-20px);
      animation-delay: 0s;
      z-index: 3;
    }

    .task-card:nth-child(2) {
      transform: rotate(5deg) translateX(10px) translateY(-20px);
      animation-delay: 0.5s;
      z-index: 2;
    }

    .task-card:nth-child(3) {
      transform: rotate(25deg) translateX(40px);
      animation-delay: 1s;
      z-index: 1;
    }

    .task-card .task-header {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
    }

    .task-card .task-header i {
      font-size: 1.5rem;
      color: var(--primary-color);
      margin-right: 0.75rem;
    }

    .task-card .task-title {
      font-weight: 600;
      color: var(--text-color);
      margin: 0;
    }

    .task-card .task-progress {
      height: 8px;
      background: var(--gray-light);
      border-radius: 4px;
      margin: 1rem 0;
      overflow: hidden;
    }

    .task-card .progress-bar {
      height: 100%;
      background: var(--primary-color);
      border-radius: 4px;
      width: 75%;
      transition: width 1s ease;
    }

    @keyframes cardFloat {
      0%, 100% {
        transform: translateY(0) rotate(var(--rotation));
      }
      50% {
        transform: translateY(-10px) rotate(var(--rotation));
      }
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-20px);
      }
    }

    /* Features Section */
    .features {
      padding: 6rem 0;
      background: var(--white);
      position: relative;
      overflow: hidden;
    }

    .section-title {
      text-align: center;
      margin-bottom: 4rem;
      position: relative;
      z-index: 1;
    }

    .section-title h2 {
      font-size: 2.75rem;
      font-weight: 800;
      background: linear-gradient(to right, var(--secondary-color), var(--primary-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 1.5rem;
      letter-spacing: -0.5px;
    }

    .feature-box, .why-item {
      background: var(--white);
      padding: 2.5rem;
      border-radius: 16px;
      box-shadow: 0 10px 40px -5px rgba(0, 0, 0, 0.08);
      height: 100%;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      border: 1px solid rgba(0, 0, 0, 0.05);
      position: relative;
      overflow: hidden;
    }

    .feature-box::after {
      content: '';
      position: absolute;
      bottom: 0;
      right: 0;
      width: 100px;
      height: 100px;
      background: linear-gradient(135deg, transparent 50%, rgba(0, 0, 0, 0.03));
      border-radius: 100% 0 0 0;
      transition: all 0.4s ease;
    }

    .feature-box:hover::after {
      width: 150px;
      height: 150px;
    }

    .feature-box:nth-child(1) {
      border-left: 4px solid #F97316;
    }

    .feature-box:nth-child(2) {
      border-left: 4px solid #06B6D4;
    }

    .feature-box:nth-child(3) {
      border-left: 4px solid #10B981;
    }

    .feature-box:nth-child(4) {
      border-left: 4px solid #6366F1;
    }

    .feature-box i {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      transition: all 0.4s ease;
      position: relative;
      z-index: 1;
    }

    .feature-box:nth-child(1) i {
      color: #F97316;
    }

    .feature-box:nth-child(2) i {
      color: #06B6D4;
    }

    .feature-box:nth-child(3) i {
      color: #10B981;
    }

    .feature-box:nth-child(4) i {
      color: #6366F1;
    }

    .feature-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }

    .feature-box:hover i {
      transform: scale(1.1) rotate(-5deg);
    }

    .feature-box h3 {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--text-color);
    }

    .feature-box p {
      color: #6B7280;
      line-height: 1.6;
      margin: 0;
    }

    /* Why Choose Us Section */
    .why-us {
      padding: 6rem 0;
      background: var(--gray-light);
    }

    .why-item {
      background: var(--white);
      padding: 2.5rem;
      border-radius: 16px;
      box-shadow: 0 10px 40px -5px rgba(0, 0, 0, 0.08);
      height: 100%;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      border: 1px solid rgba(0, 0, 0, 0.05);
      position: relative;
      overflow: hidden;
    }

    .why-item::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    .why-item:nth-child(1)::before {
      background: linear-gradient(90deg, #159895, #002B5B);
    }

    .why-item:nth-child(2)::before {
      background: linear-gradient(90deg, #3B82F6, #1D4ED8);
    }

    .why-item:nth-child(3)::before {
      background: linear-gradient(90deg, #EC4899, #BE185D);
    }

    .why-item:nth-child(4)::before {
      background: linear-gradient(90deg, #8B5CF6, #6D28D9);
    }

    .why-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }

    .why-item i {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      transition: all 0.4s ease;
      position: relative;
      z-index: 1;
    }

    .why-item:nth-child(1) i {
      color: #159895;
    }

    .why-item:nth-child(2) i {
      color: #3B82F6;
    }

    .why-item:nth-child(3) i {
      color: #EC4899;
    }

    .why-item:nth-child(4) i {
      color: #8B5CF6;
    }

    .why-item h3 {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 1rem;
      position: relative;
      z-index: 1;
    }

    .why-item:hover i {
      transform: scale(1.1) rotate(5deg);
    }

    /* Contact Section */
    .contact {
      padding: 6rem 0;
      background: var(--white);
      position: relative;
    }

    .footer {
      background: linear-gradient(to right, #1E293B, #0F172A);
      padding: 2rem 0;
      text-align: center;
      color: var(--white);
    }

    /* Additional Spacing Fixes */
    main {
      padding-top: 80px;
    }

    .info-wrap {
      background: var(--white);
      padding: 3.5rem;
      border-radius: 24px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05);
      margin-bottom: 3rem;
      border: 1px solid rgba(0, 0, 0, 0.05);
      position: relative;
      overflow: hidden;
    }

    .info-wrap::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    }

    .info-item {
      padding: 2rem;
      transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
      border-radius: 16px;
      text-align: center;
      position: relative;
      z-index: 1;
      text-decoration: none;
      display: block;
      cursor: pointer;
    }

    .info-item::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 16px;
      padding: 2px;
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      opacity: 0;
      transition: all 0.4s ease;
    }

    .info-item:hover::before {
      opacity: 1;
    }

    .info-item:hover {
      transform: translateY(-5px);
    }

    .info-item i {
      font-size: 2.5rem;
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 1.25rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .info-item i::after {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 50%;
      padding: 2px;
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
    }

    .info-item h3 {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1rem;
      color: var(--text-color);
    }

    .info-item p {
      color: #6B7280;
      line-height: 1.6;
      margin: 0;
      font-size: 1.1rem;
    }

    .info-item:hover h3,
    .info-item:hover p {
      color: var(--primary-color);
    }

    .map-container {
      background: var(--white);
      padding: 1rem;
      border-radius: 24px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.05);
      overflow: hidden;
      border: 1px solid rgba(0, 0, 0, 0.05);
      position: relative;
    }

    .map-container::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, var(--secondary-color), var(--primary-color));
    }

    .map-container iframe {
      width: 100%;
      height: 450px;
      border: none;
      border-radius: 20px;
    }

    .contact .section-title h2 {
      margin-bottom: 2rem;
    }

    .contact .section-title::after {
      content: '';
      display: block;
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
      margin: 1rem auto 0;
      border-radius: 2px;
    }

    /* Responsive Fixes */
    @media (max-width: 991px) {
      .hero {
        padding: 5rem 0 3rem;
        text-align: center;
      }
      
      .hero-img {
        margin-top: 3rem;
      }
      
      .why-item {
        margin-bottom: 2rem;
      }
      
      .feature-box {
        margin-bottom: 2rem;
      }
    }
  </style>
</head>

<body>
  <header id="header" class="header">
    <div class="container-fluid">
      <a href="/" class="logo">
        <span class="sitename">Gawenz</span>
      </a>

      <nav id="navbar" class="navmenu">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#features">Fitur</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      @auth
        <a class="btn-getstarted" href="{{ route('dashboard') }}">Dashboard</a> 
      @else
        <a class="btn-getstarted" href="{{ route('login') }}">Login</a> 
      @endauth
      </nav>

      <i class="mobile-nav-toggle d-lg-none bi bi-list"></i>
    </div>
  </header>

  <main>
    <!-- Hero Section -->
    <section id="hero" class="hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <h1>Management Tugas</h1>
            <p class="hero-text">Rencanakan. Laksanakan. Selesaikan. Dengan Efisiensi di Setiap Langkah.</p>
              @auth
              <a href="{{ route('dashboard') }}" class="btn-getstarted">Dashboard</a>
              @else
              <a href="{{ route('login') }}" class="btn-getstarted">Login</a>
              @endauth
          </div>
          <div class="col-lg-6">
            <img src="{{ asset('images/hero-img.png') }}" class="hero-img" alt="Task Management Illustration">
          </div>
        </div>
      </div>
    </section>

   
    <!-- Features Section -->
    <section id="features" class="features">
      <div class="container">
        <h2 class="text-center mb-5">Fitur Kami</h2>
        
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="feature-box">
            <i class="bi bi-person-gear"></i>
            <h3>Kontrol Penuh Admin</h3>
              <p>Admin bisa atur semuanya, dari akses sampai manajemen pengguna.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feature-box">
              <i class="bi bi-graph-up"></i>
              <h3>Kelola Tugas</h3>
              <p>Tambah, ubah, atau hapus tugas dengan gampang.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feature-box">
              <i class="bi bi-people"></i>
              <h3>Laporan</h3>
              <p>Nikmati kemudahan mengunduh laporan tugas dalam PDF untuk memantau hasil kerja dengan mudah.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feature-box">
              <i class="bi bi-file-earmark-text"></i>
              <h3>Pencarian</h3>
              <p>Gunakan kata kunci untuk menemukan tugas anda.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
<section id="contact" class="contact py-5">
  <div class="container">
    <h2 class="text-center mb-5">Kontak Kami</h2>
    <div class="row justify-content-center">
      <div class="col-lg-10">
            <div class="info-wrap">
          <div class="row justify-content-center text-center g-4">
            <div class="col-md-4">
              <a href="#map" class="info-item d-block text-decoration-none text-dark">
                <i class="bi bi-geo-alt fs-2 mb-2"></i>
                <h3>Lokasi</h3>
                <p> GraPARI Telkomsel Bogor, Jawa Barat<br>Indonesia</p>
              </a>
            </div>
            <div class="col-md-4">
              <a href="https://wa.me/6283841609901" target="_blank" class="info-item d-block text-decoration-none text-dark">
                <i class="bi bi-phone fs-2 mb-2"></i>
                <h3>Telepon</h3>
                <p>+62 838 4160 9901</p>
              </a>
            </div>
          </div>
        </div>
                </div>
                </div>
                </div>
</section>


            <div class="map-container" id="map">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7926.956082615439!2d106.804887!3d-6.587346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c565af73f285%3A0x31162bab29270!2sGraPARI%20Telkomsel%20Bogor!5e0!3m2!1sid!2sid!4v1744555579958!5m2!1sid!2sid"
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <p>© <span>Copyright</span> <strong class="px-1">GAWENZ</strong> <span>All Rights Reserved</span></p>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="{{ asset('enno/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('enno/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('enno/assets/js/main.js') }}"></script>
</body>

</html>