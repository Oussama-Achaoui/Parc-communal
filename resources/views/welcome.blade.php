@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Use Black Dashboard theme to create a great project.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('vehicule/store', ['as' => 'vehicule.store', 'uses' => 'App\Http\Controllers\vehiculeController@store']);
	Route::put('vehicule', ['as' => 'vehicule.update', 'uses' => 'App\Http\Controllers\vehiculeController@update']);
	Route::put('vehicule/password', ['as' => 'vehicule.password', 'uses' => 'App\Http\Controllers\vehiculeController@password']);
});
