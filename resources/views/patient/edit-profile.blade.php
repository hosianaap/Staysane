@extends('layout.main-patient-layout')
@section('mainTitle', 'Edit My Profile')
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
    <h3>EDIT MY PROFILE</h3>

    <form action="/patient/profile/update" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @foreach ($listakunpasien as $p)
            <input type="hidden" name="id" value="{{ $p->idpasien }}"> <br>
            <div class="form-group">
                <label for="nama">Profile Photo:</label>
                <input type="file" name="file">
            </div>
            <div class="form-group">
                <label for="pass">Username:</label>
                <input type="text" class="form-control" name="uname" value="{{ $p->unamepasien }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="{{ $p->namapasien }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="{{ $p->emailpasien }}">
            </div>
            <div class="form-group">
                <label for="pass">Location:</label>
                <input type="text" class="form-control" name="location" value="{{ $p->lokasi }}" required>
            </div>
            <div class="form-group">
                <label for="pass">Phone Number:</label>
                <input type="text" class="form-control" name="phone" value="{{ $p->telppasien }}">
            </div>
            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" class="form-control" name="pass" value="{{ $p->passwordpasien }}">
            </div>
            <div class="d-flex" style="padding-top: 40px">
                <a href="/patient/profile" class="btn payment-bttn"> Back
                </a>
                <div style="padding-left: 40px">
                    <input type="submit" class="btn payment-bttn" value="Save Data">
                </div>
    </form>
    @endforeach
@endsection
