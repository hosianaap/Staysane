@extends('layout.main-patient-layout')

@section('mainTitle', 'List Psikolog')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/" class="btn nav-link" role="button"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="/patient/doctor" class="btn nav-link active" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Doctor</span></a></li>
            <li><a href="/patient/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/patient/profile" class="btn nav-link " role="button"><i class="bx bx-user"></i>
                    <span>Profie</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection
@section('content')

    <div class="container">

        <div class="row height d-flex justify-content-center align-items-center">

            <div class="col-md-11">

                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" placeholder="Find Your Psychologist">
                    <button class="btn btn-primary">Search</button>
                </div>

            </div>

        </div>
    </div>
    <div class="container mt-3 mb-4">
        <div class="col-lg-12 mt-4 mt-lg-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
                        <table class="table manage-candidates-top mb-0">
                            <thead>
                                <tr>
                                    <th>Psikolog Name</th>
                                    <th class="text-center">Experience</th>
                                    <th class="action text-center">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid"
                                                src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Dr. Nike Ardilla., M.Psi.</a>
                                                    </h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pr-1"></i>Information Technology</li>
                                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Rolling Meadows, IL
                                                            60008</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">4 years experience</span>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">4.5</span>
                                    </td>
                                </tr>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid"
                                                src="https://drkarenfinn.com/wp-content/uploads/2017/03/images_blogs_2017-blog-over40.jpg"
                                                alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Drs. Anthony S., M.Psi.</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pr-1"></i>Human Resources</li>
                                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Monroe Township, NJ
                                                            08831</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">3 years experience</span>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">5</span>
                                    </td>
                                </tr>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid"
                                                src="https://res.cloudinary.com/looksthatwork/image/upload/f_auto,g_auto,w_540,h_680,c_fill,q_75/v1616659610/short-beard-styles-014_wblvp0.jpg"
                                                alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Dr. Enrico A., M.Psi.</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pr-1"></i>Recruitment Consultancy</li>
                                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Haines City, FL 33844
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">15 years experience</span>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">4</span>
                                    </td>
                                </tr>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid"
                                                src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Dr. Joe Miller, M.Psi.</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pr-1"></i>Human Resources</li>
                                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Minneapolis, MN 55406
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">2 years experience</span>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">3</span>
                                    </td>
                                </tr>
                                <tr class="candidates-list">
                                    <td class="title">
                                        <div class="thumb">
                                            <img class="img-fluid"
                                                src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                        </div>
                                        <div class="candidate-list-details">
                                            <div class="candidate-list-info">
                                                <div class="candidate-list-title">
                                                    <h5 class="mb-0"><a href="#">Dr. Addie Larue, M.Psi.</a></h5>
                                                </div>
                                                <div class="candidate-list-option">
                                                    <ul class="list-unstyled">
                                                        <li><i class="fas fa-filter pr-1"></i>Information Technology</li>
                                                        <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">5 years experience</span>
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                        <span class="candidate-list-time order-1">4.2</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center mt-3 mt-sm-3">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled"> <span class="page-link">Prev</span> </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1 </span>
                                    <span class="sr-only">(current)</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">25</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
