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
    	return view('patient.profile',['listakunpasien' => $akunpasien]);
    }
    public function profilPsikolog()
    {
    	$listakunpsikolog = DB::table('listakunpsikolog')->get();
    	return view('psikolog.profile',['listakunpsikolog' => $listakunpsikolog]);
    }

public function EditProfilPsikolog($id)
{

	$listakunpsikolog = DB::table('listakunpsikolog')->where('sipp',$id)->get();
	return view('psikolog.edit-profile',['listakunpsikolog' => $listakunpsikolog]);
}

public function UpdateProfilPsikolog(Request $request)
{
    $file = $request->file('file');
    $tujuan_upload = 'data_file';


	DB::table('listakunpsikolog')->where('sipp',$request->id)->update([
		'namapsikolog' => $request->nama,
		'sipp' => $request-> sipp,
		'emailpsikolog' => $request->email,
		'passwordpsikolog' => $request->pass,
        'fotopsikolog' => $file->getClientOriginalName(),
        'experience' => $request->exp,
        'alumnus' => $request->alumnus,
        'workplace' => $request->workplace
	]);
    $file->move($tujuan_upload,$file->getClientOriginalName());
	return redirect('/psikolog/profile');
}
public function EditProfilPatient($id)
{

	$listakunpasien = DB::table('listakunpasien')->where('idpasien',$id)->get();
	return view('patient.edit-profile',['listakunpasien' => $listakunpasien]);
}
public function UpdateProfilPatient(Request $request)
{
    $file = $request->file('file');
    $tujuan_upload = 'data_file';
	DB::table('listakunpasien')->where('idpasien',$request->id)->update([
        'unamepasien' => $request->uname,
		'namapasien' => $request->nama,
		'emailpasien' => $request->email,
		'lokasi' => $request->location,
        'telppasien' => $request->phone,
        'passwordpasien' => $request->pass,
        'fotopasien' => $file->getClientOriginalName()
	]);
    $file->move($tujuan_upload,$file->getClientOriginalName());
	return redirect('/patient/profile');
}
}
