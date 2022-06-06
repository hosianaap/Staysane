@extends('layout.main-patient-layout')
@section('mainTitle', 'Doctor and Consultation')
@section('navbar-actived')
<nav id="navbar" class="nav-menu navbar">
    <ul>
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
	<h3>SCHEDULE MY CONSULTATION</h3>

	<a href="/patient/doctor-info"> Kembali</a>

	<br/>
	<br/>


	<form action="/patient/doctor-info/update" method="POST">
		{{ csrf_field() }}
        @foreach($konsultasi as $k)
		<input type="hidden" name="id" value="{{ $k->idkonsultasi }}"> <br>


		<br>
        <input type="submit" class="btn payment-bttn" value="Save Data">
    </form>
	@endforeach
    @endsection


