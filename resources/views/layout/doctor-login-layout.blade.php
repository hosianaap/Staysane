<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
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

    .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
    }


    .nav-tabs {
        margin-top: 3%;
        border: none;
        background: #BDC6B1;
        border-radius: 1.5rem;
        width: 28%;
        float:
            center;
    }

    .nav-tabs .nav-link {
        padding: 2%;
        height: 34px;
        font-weight: 600;
        color: ##536D6C;
        border-top-right-radius: 1.5rem;
        border-bottom-right-radius: 1.5rem;
    }

    .nav-tabs .nav-link:hover {
        border: none;
    }

    .nav-tabs .nav-link.active {
        width: 100px;
        color: #BDC6B1;
        border: 2px solid #536D6C;
        border-top-left-radius: 1.5rem;
        border-bottom-left-radius: 1.5rem;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
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
                            <div class="col-lg-7 mx-auto">
                                <h3 class="login-heading mb-4 text-center">@yield('title')</h3>

                            </div>
                        </div>
                        <!-- Nav Pills -->
                        <div class="row">
                            <div class="col-lg-7 mx-auto">
                                <ul role="tablist"
                                    class="nav bg-light
                                 nav-pills rounded-pill nav-fill mb-3">
                                    <!-- Sign In  -->
                                    <li class="nav-item">
                                        <a data-toggle="pill" href="#nav-tab-signIn"
                                            class="nav-link active rounded-pill">
                                            @yield('signIn')
                                        </a>
                                    </li>
                                    <!-- Sign Up  -->
                                    <li class="nav-item">
                                        <a data-toggle="pill" href="#nav-tab-signUp" class="nav-link rounded-pill">
                                            @yield('signUp')
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Nav Pills Content -->

                        <div class="row">
                            <div class="tab-content col-md-9 col-lg-8 mx-auto">
                                <!-- Sign In Info -->
                                <div id="nav-tab-signIn" class="tab-pane fade show active">
                                    {{-- <p class="alert alert-success">Some text success or error</p> --}}
                                    <form role="form">
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email">@yield('email')</label>
                                            <input type="text" name="email" placeholder="Enter your email" required
                                                class="form-control">
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label for="password">@yield('password')</label>
                                            <div class="input-group">
                                                <input type="password" name="password" placeholder="Enter your password"
                                                    class="form-control password" required data-toggle="password"
                                                    id="password">
                                                <div class="input-group-append">
                                                    <span class="input-group-text text-muted togglePassword">
                                                        <i class="fa fa-eye-slash mx-1 togglePassword"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="confirm btn btn-primary btn-block rounded-pill shadow-sm">
                                            @yield('signIn') </button>
                                        <a href="/role"
                                            class="btn btn-info btn-block rounded-pill shadow-sm">@yield('back')</a>

                                    </form>
                                </div>

                                <!-- Sign Up info -->
                                <div id="nav-tab-signUp" class="tab-pane fade">
                                    {{-- <p class="alert alert-success">Some text success or error</p> --}}
                                    <form role="form">
                                        <!-- Name -->
                                        <div class="form-group">
                                            <label for="SIPP">@yield('SIPP')</label>
                                            <input type="number" name="SIPP" placeholder="Enter your SIPP" required
                                                class="form-control">
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group">
                                            <label for="email">@yield('email')</label>
                                            <input type="text" name="username" placeholder="Enter your email address"
                                                required class="form-control">
                                        </div>
                                        <!-- Password -->
                                        <div class="form-group">
                                            <label for="pw">@yield('password')</label>
                                            <div class="input-group">
                                                <input type="pw" name="pw" placeholder="Enter your password"
                                                    class="form-control password" required data-toggle="pw" id="pw">
                                                <div class="input-group-append">
                                                    <span class="input-group-text text-muted togglePW">
                                                        <i class="fa fa-eye-slash mx-1 togglePW"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="confirm btn btn-primary btn-block rounded-pill shadow-sm">
                                            @yield('signUp') </button>
                                        <a href="/role"
                                            class="btn btn-info btn-block rounded-pill shadow-sm">@yield('back')</a>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector(".togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {

            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            // toggle the eye icon
            this.classList.toggle('fa fa-eye');
            this.classList.toggle('fa fa-eye-slash');
        });

        const togglePW = document.querySelector(".togglePW");
        const pw = document.querySelector("#pw");

        togglePW.addEventListener("click", function() {

            // toggle the type attribute
            const types = pw.getAttribute("type") === "password" ? "text" : "password";
            pw.setAttribute("type", types);
            // toggle the eye icon
            this.classList.toggle('fa fa-eye');
            this.classList.toggle('fa fa-eye-slash');
        });
    </script>
</body>

</html>
