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
Route::get('/user', function () {
    return view('user');
});
Route::post('/userdata','UserController@index');
Route::view('profile','profile');
Route::view('home','home');
Route::view('noaccess','noaccess');
Route::view('csrfexample', 'csrftest');
Route::post('csrfexample', 'CsrfController@index');
Route::get('api','ApiController@list');

//Group middleware
/* Route::group(['middleware' => 'customauth'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/user', function () {
        return view('user');
    });
    Route::post('/userdata','UserController@index');
    Route::view('profile','profile');
    Route::view('home','home');
    Route::view('noaccess','noaccess');
}); */