<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\UserController;


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('admin');

// Shop and welcome
Route::get('/', 'WelcomePageController@index')->name('welcome');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');
Route::get('/shop/search/{query}', 'ShopController@search')->name('shop.search');

// Cart
Route::get('/cart', function () {
    return view('cart');
});


// auth routes
Auth::routes();
Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/contacto', function () {
    return view('contacto');
});

// Ruta para perfil de usuario
Route::get('/profile/{id}', 'UserController@show')->name('profile');
//editar perfil
Route::get('/profile/{id}/edit', 'UserController@edit')->name('profileedit');
Route::put('/profile/{id}', 'UserController@update')->name('profileupdate');
//eliminar perfil
Route::delete('/profile/{id}', 'UserController@destroy')->name('profiledestroy');

