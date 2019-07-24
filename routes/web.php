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
Auth::routes(['Verify'=>true]);

Route::get('/', function () {
	if (!empty(auth()->user())) {
		if (auth()->user()->authorizeRoles('admin','employee','client')) {
			if (auth()->user()->hasRole('admin')) {
                return view('homeadmin');
            }else{
                if (auth()->user()->hasRole('employee')) {
                    return view('homeemp');
                }else{
                    if (auth()->user()->hasRole('client')) {
                        return view('homecli');
                    }else{
                        return view('error');
                    }
                }
            }
        }
	}else{
    	return view('welcome');
    }
});

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inicio', 'HomeController@inicio')->name('inicio');

//publicaciones
Route::get('/portal/albúm/fotos', 'PublicationController@mostrarfotos')->name('fotos');
Route::get('/portal/albúm/prensa', 'PublicationController@mostrarprensa')->name('prensa');
Route::get('/portal/albúm/agenda', 'PublicationController@mostraragenda')->name('agenda');

Route::get('/portal/usuario/participar', 'ClientController@mostrarparticipar')->name('participar');
Route::get('/portal/usuario/inscribirse', 'ClientController@mostrarinscribir')->name('inscribir');
Route::get('/portal/usuario/pwa', 'ClientController@mostrapwa')->name('pwa');
