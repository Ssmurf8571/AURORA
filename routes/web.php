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

Route::get('/langing', function () {
    return view('landing');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    $title = 'home';
    return view('content.home', ['page'=>$title]);
});

Route::get('services/{url}', 'App\Http\Controllers\MainController@getServicesURL');

Route::get('/{url}', 'App\Http\Controllers\MainController@getStartURL');