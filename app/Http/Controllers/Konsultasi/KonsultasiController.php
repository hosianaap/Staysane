<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    //Desi
    public function listPsikolog()
    {
    	// mengambil data dari table psikolog
    	$listakunpsikolog = DB::table('listakunpsikolog')->get();
    	// mengirim data psikolog ke view index
    	return view('psikolog.list-psikolog',['listakunpsikolog' => $listakunpsikolog]);
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table psikolog sesuai pencarian data
		$listakunpsikolog = DB::table('listakunpsikolog')
		->where('namapsikolog','like',"%".$cari."%")
		->paginate();

    		// mengirim data psikolog ke view index
		return view('psikolog.list-psikolog',['listakunpsikolog' => $listakunpsikolog]);

	}

    public function listPatient()
    {
    	// mengambil data dari table pasien
    	$listakunpasien = DB::table('listakunpasien')->get();
    	// mengirim data pasien ke view index
    	return view('patient.list-patient',['listakunpasien' => $listakunpasien]);
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;

    		// mengambil data dari table pasien sesuai pencarian data
		$listakunpasien = DB::table('listakunpasien')
		->where('namapasien','like',"%".$search."%")
		->paginate();

    		// mengirim data pasien ke view index
		return view('patient.list-patient',['listakunpasien' => $listakunpasien]);

	}

    //Nazriyah deny T
    public function chatPatient() {
        return view('patient.chat');
    }
    public function chatPsikolog() {
        return view('psikolog.chat');
    }
}
