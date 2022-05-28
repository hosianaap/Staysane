@extends('layout.all-layout')
   @section('konten')

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
        h2{
            margin-top: 12%
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


