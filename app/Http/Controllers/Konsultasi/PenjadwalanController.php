<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PenjadwalanController extends Controller
{
    //
    public function patientSchedule(){
        $konsultasi = DB::table('konsultasi')
        ->leftjoin('listakunpasien', 'konsultasi.idpasien', '=', 'listakunpasien.idpasien')
        ->get();

    	return view('patient.scheduling',['konsultasi' => $konsultasi]);
    }
    public function psikologSchedule(){
        $konsultasi = DB::table('konsultasi')
        ->leftjoin('listakunpsikolog', 'konsultasi.sipp', '=', 'listakunpsikolog.sipp')
        ->get();

    	return view('psikolog.scheduling',['konsultasi' => $konsultasi]);
    }

    public function detailPsikolog()
    {
    	$listakunpsikolog = DB::table('listakunpsikolog')
        ->leftjoin('konsultasi', 'listakunpsikolog.sipp', '=', 'konsultasi.sipp')
->get();
    	return view('patient.information',['listakunpsikolog' => $listakunpsikolog]);
    }

public function store(Request $request)
{

	DB::table('konsultasi')->insert([
		'mediakonsultasi' => $request->media,
		'waktukonsultasi' => $request->waktu
	]);
	return redirect('/patient/doctor-info');

}

public function editJadwal($id)
{

	$konsultasi = DB::table('konsultasi')->where('idkonsultasi',$id)->get();
	return view('patient.edit-information',['konsultasi' => $konsultasi]);
}

public function updateJadwal(Request $request)
{
	DB::table('konsultasi')->where('idkonsultasi',$request->id)->update([
		'mediakonsultasi' => $request->mediakonsultasi,
		'waktukonsultasi' => $request->waktukonsultasi
    	]);
	return redirect('/patient/doctor-info');
}
}
