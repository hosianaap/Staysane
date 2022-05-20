<html>

<head>
    <title>@yield('mainTitle')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    .login {
        min-height: 100vh;
    }

    .bg-image {
        background-image: url("{{ asset('images/sidepic.png') }}");
        background-size: cover;
        background-position: center;
    }

    .login-heading {
        font-family: 'Poppins';
        font-weight: 500;
        font-size: 30px;
        line-height: 45px;
    }

    .card {
        border: 0;
        box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    }

    .card img {
        width: 80px;
        height: 80px;
    }

    .card-title {
        font-family: 'Poppins';
        font-weight: 500;
        font-size: 20px;
        line-height: 19px;
    }

    a:link,
    :visited,
    :hover,
    :active {
        color: black;
        text-decoration: none;
    }

</style>

<body>
    <div class="container-fluid ps-md-0">
        <div class="row g-0">
            <!-- Sidepic Image -->
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">@yield('title')</h3>
                            </div>
                        </div>
                        <!-- Patient Role Card -->
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <a href="/role/patient/login">
                                    <div class="card">
                                        <div class="row g-0 mt-2 mb-2 ml-2">
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                                                <img src="{{ asset('images/patient.png') }}" class="card-img-top"
                                                    alt="Patient">
                                            </div>
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                <div class="card-body">
                                                    <h5 class="card-title mt-3">@yield('patientCard')</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Doctor Role Card -->
                        <div class="row mt-3">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <a href="/role/doctor/login">
                                    <div class="card">
                                        <div class="row g-0 mt-2 mb-2 ml-2">
                                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
                                                <img src="{{ asset('images/psychologist.png') }}"
                                                    class="card-img-top" alt="Doctor">
                                            </div>
                                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                                <div class="card-body">
                                                    <h5 class="card-title mt-3 ">@yield('doctorCard')</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
