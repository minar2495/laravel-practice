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

//session
Route::view('login','login');
Route::post('login','LoginController@login');
Route::view('userprofile','userprofile');
Route::get('userprofile', function () {
    if(!session()->has('data')){
        return redirect('login');
    }
    return view('userprofile');
});
Route::get('logout', function () {
  session()->forget('data');
  return redirect('login');
});

Route::view('index','index');

Route::get('/change/{lang}', function ($lang) {
    App::setLocale($lang);
    return view('index');
});
Route::post('upload','UploadFile@store');
Route::view('upload','uploadexample');

//Database 
Route::get('db', 'DbController@index');
Route::get('userslist','DbController@index');

Route::get('mycontroller','MyController@index');

Route::view('add', 'adduser');
Route::post('save','UserController@save');

Route::get('mut','MutatorController@index');


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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
