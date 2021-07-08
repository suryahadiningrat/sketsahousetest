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
// Auth::routes();

// Form Route
Route::get('/', function () {
    return view('index');
});

// Login Route
Route::get('/login', function (){
    return view('auth.login');
})->name('login');

//Logout
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Home Route
Route::get('/home', 'HomeController@index')->middleware('auth');

//Store Token To Cookie
Route::post('/store/token', 'CookieController@store');