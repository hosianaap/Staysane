<?php

namespace App\Http\Controllers\Role;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    //Noverita
    public function profilPatient(){
        $akunpasien = DB::table('listakunpasien')->get();
    	// mengirim data psikolog ke view index
    	return view('patient.profile',['listakunpasien' => $akunpasien]);
    }
    public function profilPsikolog()
    {
    	// mengambil data dari table psikolog
    	$listakunpsikolog = DB::table('listakunpsikolog')->get();
    	// mengirim data psikolog ke view index
    	return view('psikolog.profile',['listakunpsikolog' => $listakunpsikolog]);
    }
    // method untuk edit data pegawai
public function EditProfilPsikolog($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$listakunpsikolog = DB::table('listakunpsikolog')->where('sipp',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('psikolog.edit-profile',['listakunpsikolog' => $listakunpsikolog]);
}
// update data pegawai
public function UpdateProfilPsikolog(Request $request)
{
	// update data pegawai
	DB::table('listakunpsikolog')->where('sipp',$request->id)->update([
		'namapsikolog' => $request->nama,
		'sipp' => $request-> sipp,
		'emailpsikolog' => $request->email,
		'passwordpsikolog' => $request->pass
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/psikolog/profile');
}
}
