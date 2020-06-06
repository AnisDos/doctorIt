<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/* Route::get('/admin', function () {
    return view('admin.home');
})->middleware('isadmin');

 */






//admin================================================================================


Route::get('/admin',   'AdminController@index')->middleware('isadmin');
Route::get('/admin/addMedecin',   'AdminController@addMedecin')->middleware('isadmin');
Route::post('/admin/addMedecinForm',   'AdminController@addMedecinForm')->middleware('isadmin');


//=====================================================================================





//medecin================================================================================

Route::get('/medecin',   'MedecinController@index')->middleware('ismedecin');
Route::get('/medecin/addPatient',   'MedecinController@addPatient')->middleware('ismedecin');
Route::get('/medecin/calendarAppointments',   'MedecinController@calendarAppointments')->middleware('ismedecin');
Route::get('/medecin/myPatients',   'MedecinController@myPatients')->middleware('ismedecin');
Route::get('/medecin/addVisiteTo/{patient}',   'MedecinController@addVisiteTo')->middleware('ismedecin');
Route::get('/medecin/patientsRecherche',   'MedecinController@patientsRecherche')->middleware('ismedecin');
Route::post('/medecin/addVisiteForm',   'VisiteController@addVisiteForm')->middleware('ismedecin');
Route::post('/medecin/addPatientform',   'MedecinController@addPatientform')->middleware('ismedecin');
Route::post('/medecin/patientRechercheForm',   'MedecinController@patientRechercheForm')->middleware('ismedecin');
Route::post('/medecin/passwordRechercheForm',   'MedecinController@passwordRechercheForm')->middleware('ismedecin');
Route::get('/medecin/profilePatient/{patient}',   'MedecinController@profilePatient')->middleware('ismedecin');
Route::get('/medecin/myMessages',   'MedecinController@myMessages')->middleware('ismedecin');
Route::get('/medecin/checkVisitePatient/{visite}',   'VisiteController@checkVisitePatient')->middleware('ismedecin');
Route::post('/medecin/deactivateEncourMedicaments',   'MedecinController@deactivateEncourMedicaments')->middleware('ismedecin');

Route::get('/medecin/profilSettings',   'MedecinController@profilSettings')->middleware('ismedecin');
Route::post('/medecin/settingsProfilForm',   'MedecinController@settingsProfilForm')->middleware('ismedecin');
Route::get('/medecin/passwordreset',   'MedecinController@passwordreset')->middleware('ismedecin');
Route::post('/medecin/passwordResetForm',   'MedecinController@passwordResetForm')->middleware('ismedecin');
Route::get('/medecin/historiquesVisites',   'MedecinController@historiquesVisites')->middleware('ismedecin');
Route::get('/medecin/imprimerOr/{visite}',   'MedecinController@imprimerOr')->middleware('ismedecin');
Route::post('/medecin/approuveRdv',   'RdvController@approuveRdv')->middleware('ismedecin');



//=====================================================================================






//patient==============================================================================

Route::get('/patient',   'PatientController@index')->middleware('ispatient');
Route::get('/patient/profilSettings',   'PatientController@profilSettings')->middleware('ispatient');
Route::post('/patient/settingsProfilForm',   'PatientController@settingsProfilForm')->middleware('ispatient');
Route::get('/patient/myAppointments',   'PatientController@myAppointments')->middleware('ispatient');
Route::get('/patient/appointmentsavecmedecin/{medecin}',   'PatientController@appointmentsavecmedecin')->middleware('ispatient');
Route::post('/patient/addRdvFormPatient',   'PatientController@addRdvFormPatient')->middleware('ispatient');
Route::get('/patient/passwordreset',   'PatientController@passwordreset')->middleware('ispatient');
Route::post('/patient/passwordResetForm',   'PatientController@passwordResetForm')->middleware('ispatient');




//=====================================================================================



Route::get('/erreur', function () {
    return view('erreur');
});








Route::get('/loadmore', 'MessageController@index');
Route::post('/loadmore/load_data', 'MessageController@load_data')->name('loadmore.load_data');
Route::post('/message/send', 'MessageController@sendMessage');
