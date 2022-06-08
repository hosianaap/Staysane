@extends('layout.main-patient-layout')

@section('mainTitle', 'List Psikolog')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/patient/doctor" class="btn nav-link active" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Psikolog</span></a></li>
            <li><a href="/patient/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/patient/profile" class="btn nav-link " role="button"><i class="bx bx-user"></i>
                    <span>Profile</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection
@section('content')

    <div class="container">

        <div class="row height d-flex justify-content-center align-items-center">

            <div class="col-md-11">

                <div class="search">
                    <i class="fa fa-search"></i>
                    <form action="/psikolog/patient/cari" method="GET">
                        <input type="text" class="form-control" name="cari" value="{{ old('cari') }}"
                            placeholder="Find Your Psychologist">
                        <button class="btn btn-primary" type="submit" value="Cari">Search</button>
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
                                @foreach ($listakunpsikolog as $a)
                                    <tr class="candidates-list">
                                        <td class="title">
                                            <div class="thumb">
                                                <img src="{{asset('data_file/'. $a->fotopsikolog)}}">
                                            </div>
                                            <div class="candidate-list-details">
                                                <div class="candidate-list-info">
                                                    <div class="candidate-list-title">
                                                        <h5 class="mb-0"><a href="/patient/doctor-info">{{ $a->namapsikolog }}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="candidate-list-favourite-time text-center">
                                            <span class="candidate-list-time order-1">{{ $a->experience }} year
                                                experience</span>
                                        </td>
                                        <td class="candidate-list-favourite-time text-center">
                                            <span class="candidate-list-time order-1">{{ $a->rating }}</span>
                                        </td>
                                    </tr>
                                @endforeach

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
