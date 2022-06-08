@extends('layout.main-patient-layout')
@section('mainTitle', 'Information')
@section('navbar-actived')
    <style>
        .border {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 3px 4px;
            width: 76px;
            height: 30px;
            /* Global/06. Info */
            background: #17A2B8;
            border-radius: 40px;
            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;
        }
        img{
            width: 100px;
            height: 100px;
            border-radius: 25px
        }


    </style>
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
        <div class="row m-0">
            <div class="col-lg-7 pb-5 pe-lg-5">
                <div class="row" id="patient-pay">
                    <div class="row m-0">
                        <div class="d-flex justify-content- align-content-center">
                            @foreach ($listakunpsikolog as $s)
                            <img src="{{asset('data_file/'. $s->fotopsikolog)}}">
                        </div>
                    </div>

                    <div class="row m-0 detail-order">
                        <h3><strong>{{ $s->namapsikolog }}</strong></h3>
                        <br>
                        <br>
                        <br>
                        <h5>Alumnus</h5>
                        <b>
                            <p>{{ $s->alumnus }}</p>
                        </b><br><br>
                        <h5>Work Place</h5>
                        <b>
                            <p>{{ $s->workplace }}</p>
                        </b><br><br>
                        <h5>Experience</h5>
                        <b>
                            <p class="border">{{ $s->experience }} years</p>
                        </b><br><br>
                    </div>
                    <div class="row m-0">
                        <div class="col-12 px-4">
                            <br><br>
                            <div class="d-flex justify-content-between mb-2">
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <p class="textmuted fw-bold"></p>
                                <div class="d-flex align-text-top ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 p-0 ps-lg-4">
                <div class="row m-0">
                    <div class="col-12 px-0">
                            <div class="btn payment-bttn"><a href="/patient/payment" style="color: white"> Book </a>
                            </div>
                            <div class="col-lg-5 p-0 ps-lg-4">
                                <div class="row m-0">
                        </div>
                    </div>
                </div>
                {{-- <div class="row m-0">
                            <div class="col-12 px-4">
                                <div class="d-flexs">
                                    {{-- @foreach ($konsultasi as $k) --}}
                {{-- <h5>Date and Time</h5><br>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row m-0">
                            <div class="col-12 px-4">
                            <div class="d-flexs">
                                    <h5>Consultation Type</h5><br>
                            </div>
                            </div> --}}
                         {{-- </div>  --}}
                        {{-- @endforeach --}}
                        <div class="row m-0">
                            <div class="d-flex flex-row-reverse" style="padding-top: 100px">
                                {{-- <div class="btn payment-bttn"><a href="/patient/payment" style="color: white"> Book </a>
                                </div> --}}
                            </div><br>
                            <div style="padding-left: 40px">
                                <a href="/patient/doctor-info/add"><div class="btn payment-bttn"> Select Schedule
                                </div></a>
                        </div>
                    </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
