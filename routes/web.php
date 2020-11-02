<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@index');

Route::get('/server/startup', 'IndexController@startup');

Route::get('/servers', 'ConsoleController@index');

Route::get('/console', 'ViewController@index')->name('console');

Route::get('/server/start', 'ApplicationController@start');
Route::get('/server/restart', 'ApplicationController@restart');
Route::get('/server/stop', 'ApplicationController@stop');
Route::get('/server/kill', 'ApplicationController@kill');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
