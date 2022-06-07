<?php

namespace App\Http\Controllers\Konsultasi;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PenilaianController extends Controller
{
    //
    public function penilaianPasien(){
        $listakunpsikolog = DB::table('listakunpsikolog')->get();
        return view('patient.penilaian',['listakunpsikolog' => $listakunpsikolog]);
       
    }

    public function storePenilaian(Request $request)
    {
        DB::table('penilaian')->insert([
		'sipp' => $request->sipp,
        'rating' => $request->rating,
		'reviewtext' => $request->reviewtext
	]);
    return redirect('/list/psikolog');
}
}
