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
    return view('landing');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     $title = 'home';
//     return view('content.home', ['page'=>$title]);
// });

Route::get('/about', function () {
    $title = 'about';
    return view('content.about', ['page'=>$title]);
});

Route::get('/contact', function () {
    $title = 'contact';
    return view('content.contact', ['page'=>$title]);
});