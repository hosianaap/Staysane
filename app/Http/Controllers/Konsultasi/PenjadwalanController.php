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
    // public function jadwalKonsultasi()
    // {
    // 	$konsultasi = DB::table('konsultasi')->get();
    // 	return view('patient.information',['konsultasi' => $konsultasi]);
    // }

    public function EditInfoKonsultasi($id)
{

	$konsultasi = DB::table('konsultasi')->where('idkonsultasi',$id)->get();
	return view('patient.edit-information',['konsultasi' => $konsultasi]);
}


public function UpdateInfoKonsultasi(Request $request)
{

	DB::table('konsultasi')->where('idkonsultasi',$request->id)->update([
		'waktukonsultasi' => $request->waktu,
		'mediakonsultasi' => $request->media,
	]);
	return redirect('/psikolog/doctor-info');
}
}
