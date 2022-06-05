<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CatatanController extends Controller
{
    //
    public function catatanPsikolog(){
    	return view('psikolog.catatan');
    }
    // public function penilaianPasien(){
    // 	return view('patient.penilaian');
    // }
    public function store(Request $request)
    {
	DB::table('catatan')->insert([
		'catatan' => $request->catatan,
		'merklipstick' => $request->merklipstick,
		'stocklipstick' => $request->stocklipstick,
		'tersedia' => $request->tersedia
	]);
	return redirect('/lipstick');
    }
}
