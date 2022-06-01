<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//--> Aqmarina Nindya
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// route CRUD home
//--> Hosiana Arga P
Route::get('/','HomeController@home');
Route::get('/home','HomeController@home');
Route::get('/role','RoleController@role');
Route::get('/role/patient/login','RoleController@patientLogin');
Route::get('/role/patient/register','RoleController@patientRegister');
Route::get('/role/doctor/login','RoleController@doctorLogin');

//route Role --> Noverita
Route::get('/psikolog/profile','Role\ProfilController@profilPsikolog');
Route::get('/patient/profile','Role\ProfilController@profilPatient');

//route Konsultasi
//--> Noverita
Route::get('/patient/doctor-info','Konsultasi\PenjadwalanController@detailPsikolog');

//--> Nazriyah Deny Tsaniyah
Route::get('/patient/payment','Konsultasi\PembayaranController@infoPayment');
Route::get('/patient/schedule','Konsultasi\PenjadwalanController@patientSchedule');
Route::get('/patient/chats','Konsultasi\KonsultasiController@chatPatient');
Route::get('/psikolog/chats','Konsultasi\KonsultasiController@chatPsikolog');
Route::get('/psikolog/schedule','Konsultasi\PenjadwalanController@psikologSchedule');

//--> Desi
Route::get('/patient/doctor', 'Konsultasi\KonsultasiController@listPsikolog');
Route::get('/psikolog/patient', 'Konsultasi\KonsultasiController@listPasien');
