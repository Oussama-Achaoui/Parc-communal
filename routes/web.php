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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('vehicule/createvehicule', ['as' => 'vehicule.createvehicule', 'uses' => 'App\Http\Controllers\VehiculeController@createvehicule']);
	Route::get('vehicule/editvehicule', ['as' => 'vehicule.editvehicule', 'uses' => 'App\Http\Controllers\VehiculeController@editvehicule']);
	Route::get('vehicule/indexvehicule', ['as' => 'vehicule.indexvehicule', 'uses' => 'App\Http\Controllers\VehiculeController@indexvehicule']);
	Route::put('vehicule', ['as' => 'vehicule.update', 'uses' => 'App\Http\Controllers\VehiculeController@update']);
	Route::put('vehicule/password', ['as' => 'vehicule.password', 'uses' => 'App\Http\Controllers\VehiculeController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('carburant/createcarburant', ['as' => 'carburant.createcarburant', 'uses' => 'App\Http\Controllers\CarburantController@createcarburant']);
	Route::get('carburant/editcarburant', ['as' => 'carburant.editcarburant', 'uses' => 'App\Http\Controllers\CarburantController@editcarburant']);
	Route::get('carburant/indexcarburant', ['as' => 'carburant.indexcarburant', 'uses' => 'App\Http\Controllers\CarburantController@indexcarburant']);
	Route::put('carburant', ['as' => 'carburant.update', 'uses' => 'App\Http\Controllers\CarburantController@update']);
	Route::put('carburant/password', ['as' => 'carburant.password', 'uses' => 'App\Http\Controllers\CarburantController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('entretien/createentretien', ['as' => 'entretien.createentretien', 'uses' => 'App\Http\Controllers\EntretienController@createentretien']);
	Route::get('entretien/editentretien', ['as' => 'entretien.editentretien', 'uses' => 'App\Http\Controllers\EntretienController@editentretien']);
	Route::get('entretien/indexentretien', ['as' => 'entretien.indexentretien', 'uses' => 'App\Http\Controllers\EntretienController@indexentretien']);
	Route::put('entretien', ['as' => 'entretien.update', 'uses' => 'App\Http\Controllers\EntretienController@update']);
	Route::put('entretien/password', ['as' => 'entretien.password', 'uses' => 'App\Http\Controllers\EntretienController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('parametrage/createparametrage', ['as' => 'parametrage.createparametrage', 'uses' => 'App\Http\Controllers\ParametrageController@createparametrage']);
	Route::get('parametrage/editparametrage', ['as' => 'parametrage.editparametrage', 'uses' => 'App\Http\Controllers\ParametrageController@editparametrage']);
	Route::get('parametrage/indexparametrage', ['as' => 'parametrage.indexparametrage', 'uses' => 'App\Http\Controllers\ParametrageController@indexparametrage']);
	Route::put('parametrage', ['as' => 'parametrage.update', 'uses' => 'App\Http\Controllers\ParametrageController@update']);
	Route::put('parametrage/password', ['as' => 'parametrage.password', 'uses' => 'App\Http\Controllers\ParametrageController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('reparation/createreparation', ['as' => 'reparation.createreparation', 'uses' => 'App\Http\Controllers\ReparationController@createreparation']);
	Route::get('reparation/editreparation', ['as' => 'reparation.editreparation', 'uses' => 'App\Http\Controllers\ReparationController@editreparation']);
	Route::get('reparation/indexreparation', ['as' => 'reparation.indexreparation', 'uses' => 'App\Http\Controllers\ReparationController@indexreparation']);
	Route::put('reparation', ['as' => 'reparation.update', 'uses' => 'App\Http\Controllers\ReparationController@update']);
	Route::put('reparation/password', ['as' => 'reparation.password', 'uses' => 'App\Http\Controllers\ReparationController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('edition/createedition', ['as' => 'edition.createedition', 'uses' => 'App\Http\Controllers\EditionController@createedition']);
	Route::get('edition/editedition', ['as' => 'edition.editedition', 'uses' => 'App\Http\Controllers\EditionController@editedition']);
	Route::get('edition/indexedition', ['as' => 'edition.indexedition', 'uses' => 'App\Http\Controllers\EditionController@indexedition']);
	Route::put('edition', ['as' => 'edition.update', 'uses' => 'App\Http\Controllers\EditionController@update']);
	Route::put('edition/password', ['as' => 'edition.password', 'uses' => 'App\Http\Controllers\EditionController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('maps', ['as' => 'localisation.maps', 'uses' => 'App\Http\Controllers\LocalisationController@maps']);
	Route::put('localisation', ['as' => 'localisation.update', 'uses' => 'App\Http\Controllers\LocalisationController@update']);
	Route::put('localisation/password', ['as' => 'localisation.password', 'uses' => 'App\Http\Controllers\LocalisationController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::post('vehicule/createvehicule/store', ['as' => 'vehicule.store', 'uses' => 'App\Http\Controllers\VehiculeController@store']);
	Route::put('vehicule', ['as' => 'vehicule.update', 'uses' => 'App\Http\Controllers\vehiculeController@update']);
	Route::put('vehicule/password', ['as' => 'vehicule.password', 'uses' => 'App\Http\Controllers\vehiculeController@password']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
