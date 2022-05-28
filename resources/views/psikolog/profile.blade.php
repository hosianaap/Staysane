@extends('layout.main-psikolog-layout')
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


