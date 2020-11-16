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
    return view('login');
});


Route::get('user-registration', 'Auth\UserController@index');

Route::post('user-store', 'Auth\UserController@userPostRegistration');

Route::get('/user-login', 'Auth\UserController@userLoginIndex');

Route::post('login', 'Auth\UserController@userPostLogin');

Route::get('dashboard', 'Auth\UserController@redirectTo');
Route::get('logout', 'Auth\UserController@logout');
Route::get('joinmeet/{idmeeting}/{matricule}','rejoindreReunionController@inmeet');
Route::get('AcueilProf','profController@index');
Route::get('coursProf','profController@affichierCours');
Route::get('courProf','profController@affichierCourProf');
Route::get('reunionProf','profController@affichierReunion');
Route::get('newReunionProf','profController@newReunion');
Route::get('storeReunionProf','profController@storeReunion');
Route::get('creerCourProf','profController@creerCour');
// Route::get('home', 'Auth\LoginController@home')->name('home');
Route::get('accueil','accueilController@index');
Route::get('cours','formationController@index');
Route::get('etudiant','etudiantController@index');
Route::get('reunions','reunionController@index');
Route::get('newReunions/{matricule}','newReunionController@index');
Route::post('addReunion','newReunionController@store');
Route::get('/medecin', 'MedecinController@index')->name('medecin');
Route::get('/professeur', 'ProfesseurController@index')->name('professeur')->middleware('Professeur');
// Route::get('/etudiant', 'etudiantController@index')->name('etudiant')->middleware('etudiant');



