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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('dashboard', 'DashboardController@show')->name('dashboard');

Route::resource('news', 'NewsController');
Route::resource('studies', 'StudyController');
Route::resource('students', 'StudentController');
Route::resource('exchanges', 'ExchangeController');
