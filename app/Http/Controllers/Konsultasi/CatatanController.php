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
        $users = DB::table('users')->get();
        return view('psikolog.catatan',['users' => $users]);
        // ,['listakunpsikolog' => $listakunpsikolog]);
        // ,['listakunpsikolog' => $listakunpsikolog]);
    }

    public function storeCatatan(Request $request)
    {
        DB::table('catatan')->insert([
		'idpasien' => $request->id,
		'catatantext' => $request->catatantext
	]);
    return redirect('/psikolog/patient');
}
}
