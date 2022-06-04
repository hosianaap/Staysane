@extends('layout.main-psikolog-layout')
@section('mainTitle', 'Doctor Profile')
@section('navbar-actived')
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
	<h3>EDIT MY PROFIL</h3>

	<a href="/psikolog/profile"> Kembali</a>

	<br/>
	<br/>


	<form action="/psikolog/profile/update" method="POST">
		{{ csrf_field() }}
        @foreach($listakunpsikolog as $p)
		<input type="hidden" name="id" value="{{ $p->sipp }}"> <br>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control"  name="nama" value="{{ $p->namapsikolog }}">
          </div>
          <div class="form-group">
            <label for="sipp">SIPP:</label>
            <input type="text" class="form-control"  name="sipp" value="{{ $p->sipp }}">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control"  name="email" value="{{ $p->emailpsikolog }}">
          </div>
          <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" class="form-control"  name="pass" value="{{ $p->passwordpsikolog }}">
          </div>
		<br>
        <input type="submit" class="btn payment-bttn" value="Save Data">
    </form>
	@endforeach
    @endsection


