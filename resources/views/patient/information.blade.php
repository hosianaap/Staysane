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
        .border1 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 3px 4px;
            width: 110px;
            height: 30px;
            /* Global/06. Info */
            background: #17A2B8;
            border-radius: 40px;
            /* Inside auto layout */
            flex: none;
            order: 0;
            flex-grow: 0;
        }

    </style>
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/" class="btn nav-link" role="button"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="/patient/doctor" class="btn nav-link active" role="button"><i class="bi bi-bag-plus"></i>
                    <span>Doctor</span></a></li>
            <li><a href="/patient/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/patient/profile" class="btn nav-link" role="button"><i class="bx bx-user"></i>
                    <span>Profie</span></a></li>
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
                            <img alt="docpic" src="/images/doctorprofile3.png" id="docpic">
                        </div>
                    </div>

                    <div class="row m-0 detail-order">
                        @foreach ($listakunpsikolog as $s)
                                <h3><strong>{{ $s->namapsikolog }}</strong></h3>
                                <br>
                                <br>
                                <br>
                        <h5>Alumnus</h5>
                        <b>
                            <p>{{ $s->alumnus }}</p>
                        </b><br>
                        <h5>Work Place</h5>
                        <b>
                            <p>{{ $s->workplace }}</p>
                        </b><br>
                        <h5>Experience</h5>
                        <b>
                            <p class="border">{{ $s->experience }} years</p>
                        </b><br>
                        <h5>SIPP</h5>
                        <b>
                            <p class="border1">{{ $s->sipp }}</p>
                        </b><br>
                    </div>
                    @endforeach
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
                        <div class="row m-0">
                            <div class="col-12 px-4 my-4">
                            </div>
                            <div class="col-12 px-4">
                                <div class="d-flexs">
                                    <span class="">
                                       <h5>Time</h5>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row m-0">
                            <div class="d-flexs" style="padding-right: 20px">
                                <h5>Consultation Type</h5>
                            </div>
                        <div class="row m-0">
                            <div class="d-flex flex-row-reverse" style="padding-right: 20px">
                                <div class="btn payment-bttn"><a href="/patient/payment" style="color: white"> Book </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
