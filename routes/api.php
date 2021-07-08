<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//Login API and get JWT Token
Route::post('login', 'Api\AuthController@login');

//Subscriber Group API
Route::name('subscribers.')->prefix('subscribers')->group(function (){
    Route::post('store', 'FormController@store')->name('store');
    Route::get('get', 'FormController@get')->middleware('auth')->name('get');
});