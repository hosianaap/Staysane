@extends('layout.main-psikolog-layout')
@section('mainTitle', 'Doctor Profile')
@section('navbar-actived')
  <nav id="navbar" class="nav-menu navbar">
    <ul>
      <li><a href="/" class="btn nav-link" role="button"><i class="bx bx-home"></i> <span>Home</span></a></li>
      <li><a href="/psikolog/patient" class="btn nav-link " role="button"><i class="bi bi-bag-plus"></i> <span>Patient</span></a></li>
      <li><a href="/psikolog/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i> <span>Chat</span></a></li>
      <li><a href="/psikolog/profile" class="btn nav-link active" role="button"><i class="bx bx-user"></i> <span>Profie</span></a></li>
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
        p{
            font-size: 20px
        }
    </style>

        @foreach($listakunpsikolog as $d)
        <h2>
		<p class="kolom">Nama:</p>
        <p>{{ $d->namapsikolog }}</p><br>
        <p class="kolom">SIPP:</p>
        <p>{{ $d->sipp }}</p><br>
			<p class="kolom">Email:</p>
            <p>{{ $d->emailpsikolog }}</p>
        </h2>
		@endforeach
    @endsection


