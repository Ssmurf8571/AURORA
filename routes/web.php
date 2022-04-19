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

use Illuminate\Support\Facades\Route;

// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

// Route::view('/{id}', 'test', [ 'id' => '333' ]);

Route::redirect('/home', '/', 301);

Route::view('/welcome', 'welcome');

Route::view('/', 'content.home', [ 'title' => 'home' ]);
Route::view('/about', 'content.about', [ 'title' => 'about' ]);
Route::view('/contact', 'content.contact', [ 'title' => 'contact' ]);
Route::view('/services', 'content.services', [ 'title' => 'services' ]);

Route::view('/calendar', 'content.calendar');

Route::get('/services/{service}', function ($service) {
    return view('content.service', [ 'title' => $service ]);
});










// Route::get('/calendar', function () {
//     return view('content.calendar');
// });

// Route::get('/', function () {
//     $title = 'home';
//     return view('content.home', ['page'=>$title]);
// });

// Route::get('services/{url}', 'App\Http\Controllers\MainController@getServicesURL');

// Route::get('/{url}', 'App\Http\Controllers\MainController@getStartURL');
