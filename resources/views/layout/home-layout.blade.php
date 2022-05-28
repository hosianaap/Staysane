<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>

<!-- Template Main CSS File -->
<style>
    /*--------------------------------------------------------------
  # General
  --------------------------------------------------------------*/
    body {
        font-family: "Poppins", sans-serif;
        color: #444444;
    }

    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Poppins", sans-serif;
    }

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
        transition: all 0.5s;
        z-index: 997;
        padding: 15px 0;
    }

    #header .logo {
        font-size: 30px;
        margin: 0;
        padding: 0;
        line-height: 1;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    #header .logo a {
        color: #fff;
    }

    #header .logo img {
        max-height: 80px;
    }


    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/
    #hero {
        width: 100%;
        height: 100vh;
        background: linear-gradient(112.4deg, rgba(200, 205, 182, 0.7) 46.23%, rgba(83, 109, 108, 0.7) 89.81%);
    }

    #hero .container {
        padding-top: 72px;
    }

    #hero h1 {
        margin: 10px 0px;
        font-size: 58px;
        font-weight: 700;
        line-height: 80px;
        color: #253334;
        letter-spacing: 0.2px;
    }

    #hero h5 {
        color: #34494C;
        opacity: 50%;
        margin-bottom: 50px;
        font-weight: 100;
        font-size: 20px;
        letter-spacing: 0.2px;
    }

    #hero .btn-get-started {
        font-family: "Poppins", sans-serif;
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 10px 28px 11px 28px;
        border-radius: 50px;
        transition: 0.5s;
        margin: 10px 0 0 0;
        color: #fff;
        background: #536D6C;
        ;
    }

    #hero .btn-get-started:hover {
        background: #7C9A92;
    }

    #hero .animated {
        animation: up-down 2s ease-in-out infinite alternate-reverse both;
    }

    .img-fluid {
        max-width: 60%;
        height: auto;
    }

    @media (max-width: 991px) {
        #hero {
            height: 100vh;
            text-align: center;
        }

        #hero .animated {
            -webkit-animation: none;
            animation: none;
        }

        #hero .hero-img {
            text-align: center;
        }

        #hero .hero-img img {
            width: 50%;
        }
    }

    @media (max-width: 768px) {
        #hero h1 {
            font-size: 28px;
            line-height: 36px;
        }

        #hero h2 {
            font-size: 18px;
            line-height: 24px;
            margin-bottom: 30px;
        }

        #hero .hero-img img {
            width: 40%;
        }
    }

    @media (max-width: 575px) {
        #hero .hero-img img {
            width: 40%;
        }

        #hero .btn-get-started {
            font-size: 16px;
            padding: 10px 24px 11px 24px;
        }
    }

    @-webkit-keyframes up-down {
        0% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    @keyframes up-down {
        0% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(-10px);
        }
    }

    /*--------------------------------------------------------------
    # Sections General
    --------------------------------------------------------------*/
    section {
        padding: 60px 0;
        overflow: hidden;
    }

</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <a href="index.html" class="logo me-auto"><img src="images/logo.png" alt="" class="img-fluid"></a>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>@yield('heading')</h1>
                    <h5>@yield('description')</h5>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="/role" class="btn-get-started scrollto">@yield('button')</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="images/hero.png" class="img-fluid animated d-block align-items-center mx-auto" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

</body>

</html>
