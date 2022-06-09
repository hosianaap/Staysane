<?php

namespace App\Http\Controllers\Konsultasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CatatanController extends Controller
{
    //
    public function catatanPsikolog(){
        // $listakunpsikolog = DB::table('listakunpsikolog')
        // ->leftjoin('penilaian', 'listakunpsikolog.sipp', '=', 'penilaian.sipp')
        // ->where('sipp', $id)->get();
        $listakunpasien = DB::table('listakunpasien')->get();
        return view('psikolog.catatan',['listakunpasien' => $listakunpasien]);
        // ,['listakunpsikolog' => $listakunpsikolog]);
        // ,['listakunpsikolog' => $listakunpsikolog]);
    }

    public function storeCatatan(Request $request)
    {
        DB::table('catatan')->insert([
		'idpasien' => $request->idpasien,
		'catatantext' => $request->catatantext
	]);
    return redirect('/psikolog/patient');
}
}
