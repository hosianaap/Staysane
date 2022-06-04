@extends('layout.main-patient-layout')

@section('mainTitle', 'My Schedule')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/" class="btn nav-link" role="button"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="/patient/doctor" class="btn nav-link" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Doctor</span></a></li>
            <li><a href="/patient/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/patient/profile" class="btn nav-link active" role="button"><i class="bx bx-user"></i>
                    <span>Profie</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection

@section('content')

    <div class="container">
        <div>
            <h1>Your Schedule</h1>
        </div>
        <div class="row height d-flex justify-content-center align-items-center">

            <div class="col-md-11">

                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" placeholder="Find Your Schedule">
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
                                    <th class="text-center">Date</th>
                                    <th>Your Activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="candidates-list">
                                    <td class="title">
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                    </td>
                                    <td class="candidate-list-favourite-time text-center">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
