@extends('layout.main-patient-layout')

@section('mainTitle', 'My Schedule')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/psikolog/patient" class="btn nav-link" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Patient</span></a></li>
            <li><a href="/psikolog/chats" class="btn nav-link active" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/psikolog/profile" class="btn nav-link " role="button"><i class="bx bx-user"></i>
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
                                    <th class="text-center">Media</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konsultasi as $ss)
                                    <tr class="candidates-list">
                                        <td class="title">
                                            {{ $ss->waktukonsultasi }}
                                        </td>
                                        <td class="candidate-list-favourite-time text-center">
                                            {{ $ss->mediakonsultasi }}
                                        </td>
                                        <td class="candidate-list-favourite-time text-center">
                                            <a href="/psikolog/chats" class="btn btn-danger" role="button">Go to Consulting
                                                Session</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
