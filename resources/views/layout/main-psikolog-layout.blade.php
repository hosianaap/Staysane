<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('mainTitle')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/aos/aos.css" rel="stylesheet">
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?php echo asset('css/main.css')?>" type="text/css">

</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="/images/logo.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="/" style="text-shadow: 3px 4px 4px rgba(0, 0, 0, 0.25);">StaySane</a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="/home" class="btn nav-link" role="button"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="/role/doctor/doctor" class="btn nav-link active" role="button"><i class="bi bi-bag-plus"></i> <span>Doctor</span></a></li>
          <li><a href="/role/doctor/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i> <span>Chat</span></a></li>
          <li><a href="/role/doctor/profile" class="btn nav-link" role="button"><i class="bx bx-user"></i> <span>Profie</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <section>
        <!-- ======= Content Section ======= -->
        @section('content')
        @show
    </section>
  </main>
</body>

</html>
