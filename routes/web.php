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
Auth::routes();
// route CRUD home
// Route::get('/','HomeController@home');
// Route::get('/home','app\Http\Controllers\HomeController@home');
// Route::get('/', [HomeController::class, 'index']);
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/', 'LandingPageController@landingPage');
Route::get('/role','RoleController@role');
Route::get('/role/patient/login','RoleController@patientLogin');
Route::get('/role/patient/register','RoleController@patientRegister');
Route::get('/role/doctor/login','RoleController@doctorLogin');

//route Role --> Noverita
Route::get('/psikolog/profile','Role\ProfilController@profilPsikolog');
Route::get('/patient/profile','Role\ProfilController@profilPatient');
Route::get('/psikolog/edit/{id}','Role\ProfilController@EditProfilPsikolog');
Route::post('/psikolog/profile/update','Role\ProfilController@UpdateProfilPsikolog');
Route::get('/patient/edit/{id}','Role\ProfilController@EditProfilPatient');
Route::post('/patient/profile/update','Role\ProfilController@UpdateProfilPatient');
//route CRUD psikolog
Route::get('/doctor/profile','RoleController@profilPsikolog');


//route CRUD patient
Route::get('/patient/payment','RoleController@patientPayment');

Route::get('/home', 'HomeController@index')->name('home');
//route CRUD list
Route::get('/list/psikolog', 'RoleController@listPsikolog');
Route::get('/patient/doctor-info','RoleController@infoPsikolog');
