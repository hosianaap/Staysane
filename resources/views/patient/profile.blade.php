@extends('layout.main-patient-layout')
@section('mainTitle', 'Patient Profile')
@section('navbar-actived')
    <nav id="navbar" class="nav-menu navbar">
        <ul>
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
            font-size: 28px;
            color: rgba(35, 31, 32, 0.5);
        }

        p {
            font-size: 18px
        }

    </style>

    <div class="row m-0">
        <div class="d-flex justify-content-start align-content-center">
            @foreach($listakunpasien as $d)
            <img alt="docpic" src="{{$d->fotopasien}}" id="docpic">
            <div class="col docname">

                <h3><strong>{{ $d->namapasien }}</strong></h3>
                <br>
                <br>
            </div>
        </div>
    </div>
    <div class="row m-0 detail-profile">
        <p class="kolom">Nama</p>
        <b>
            <p>{{ $d->namapasien}}</p>
        </b>
        <p class="kolom">Birth date</p>
        <b>
            <p>{{ $d->tgllahir}}</p>
        </b>
        <p class="kolom">Email</p>
        <b>
            <p>{{ $d->emailpasien}}</p>
        </b>
        <p class="kolom">Location</p>
        <b>
            <p>{{ $d->lokasi}}</p>
        </b>
        <p class="kolom">Phone number</p>
        <b>
            <p>{{ $d->telppasien}}</p>
        </b>
        <div class="d-flex" style="padding-top: 40px">
            <a href="/patient/schedule"><div class="btn payment-bttn"><span><i class="bi bi-calendar"></i></span> Your schedule
            </div></a>

        <div style="padding-left: 40px">
            <a href="/patient/profile/edit/{{$d->idpasien}}"><div class="btn payment-bttn"> Edit Profile
            </div></a>
    </div></div>
    @endforeach
@endsection
