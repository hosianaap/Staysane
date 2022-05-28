@extends('layout.all-layout')
   @section('konten')

	<br>
    <br>
    <style>
        th {
            width: 15%;
            text-align: center;
            height: 1cm;
            font-size: 24px
        }
        td{
            font-size: 18px
        }
    </style>
    <div class="container">
    </div>
    <br>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>SIPP</th>
			<th>Email</th>
		</tr>
		 @foreach($listakunpsikolog as $d)
		<tr>
			<th>{{ $d->namapsikolog }}</th>
			<th>{{ $d->sipp }}</th>
            <th>{{ $d->emailpsikolog }}</th>
		</tr>
		@endforeach
    @endsection


