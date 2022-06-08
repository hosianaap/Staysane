@extends('layout.main-psikolog-layout')
@section('mainTitle', 'Edit My Profile')
@section('navbar-actived')
  <nav id="navbar" class="nav-menu navbar">
    <ul>
      <li><a href="/psikolog/patient" class="btn nav-link " role="button"><i class="bi bi-bag-plus"></i> <span>Patient</span></a></li>
      <li><a href="/psikolog/chats" class="btn nav-link" role="button"><i class="bi bi-chat-dots"></i> <span>Chat</span></a></li>
      <li><a href="/psikolog/profile" class="btn nav-link active" role="button"><i class="bx bx-user"></i> <span>Profile</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->
@endsection

@section('content')
	<h3>EDIT MY PROFILE</h3>
	<br/>

	<form action="/psikolog/profile/update" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
        @foreach($listakunpsikolog as $p)
		<input type="hidden" name="id" value="{{ $p->sipp }}"> <br>
        <div class="form-group">
            <label for="foto">Profile Photo:</label>
            <input type="file" name="file">
          </div>
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
            <label for="nama">Experience:</label>
            <input type="text" class="form-control"  name="exp" value="{{ $p->experience }}">
          </div>
          <div class="form-group">
            <label for="nama">Alumnus:</label>
            <input type="text" class="form-control"  name="alumnus" value="{{ $p->alumnus }}">
          </div>
          <div class="form-group">
            <label for="nama">Workplace:</label>
            <input type="text" class="form-control"  name="workplace" value="{{ $p->workplace }}">
          </div>
          <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" class="form-control"  name="pass" value="{{ $p->passwordpsikolog }}">
          </div>
		<br>
        <div class="d-flex" style="padding-top: 40px">
            <a href="/psikolog/profile" class="btn payment-bttn"> Back
            </a>
            <div style="padding-left: 40px">
                <input type="submit" class="btn payment-bttn" value="Save Data"> </div>
    </form>
    @endforeach
    @endsection


