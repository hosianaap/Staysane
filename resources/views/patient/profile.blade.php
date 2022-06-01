@extends('layout.main-psikolog-layout')
@section('mainTitle', 'Patient Profile')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
            <li><a href="/" class="btn nav-link" role="button"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="/patient/doctor" class="btn nav-link " role="button"><i class="bi bi-bag-plus"></i>
                    <span>Doctor</span></a></li>
            <li><a href="/patient/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i>
                    <span>Chat</span></a></li>
            <li><a href="/patient/profile" class="btn nav-link active" role="button"><i class="bx bx-user"></i>
                    <span>Profie</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->
@endsection

@section('content')

    <br>
    <br>
    <style>
        .kolom {
            font-size: 32px;
            color: rgba(35, 31, 32, 0.5);
        }

        p {
            font-size: 20px
        }

    </style>

    <div class="row m-0">
        <div class="d-flex justify-content-start align-content-center">
            <img alt="docpic" src="/images/doctorprofile3.png" id="docpic">
            <div class="col docname">
                <h3><strong>Dr. Nike Ardilla, M.Psi.</strong></h3>
            </div>
        </div>
    </div>
    <div class="row m-0 detail-order">
        <strong>
            <h4>Detail Order</h4>
        </strong>
        <p>Order ID</p>
        <b>
            <p>12345</p>
        </b>
        <p>Consultation Type</p>
        <b>
            <p>Video Call</p>
        </b>
        <p>Fee</p>
        <b>
            <p>Rp 15.000,00/Meeting</p>
        </b>
        <div class="d-flex" style="padding-top: 40px">
            <a href="/patient/schedule"><div class="btn payment-bttn"><span><i class="bi bi-calendar"></i></span> Your schedule
            </div></a>
        </div>
    </div>

@endsection
