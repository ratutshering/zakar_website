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

Route::middleware(['auth:sanctum', 'verified'])->get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/year', 'App\Http\Controllers\YearController@index')->name('year');
Route::middleware(['auth:sanctum', 'verified'])->get('/view_calender', 'App\Http\Controllers\DashboardController@view_calender')->name('view_calender');
Route::middleware(['auth:sanctum', 'verified'])->get('/event', 'App\Http\Controllers\EventController@index')->name('event');
Route::middleware(['auth:sanctum', 'verified'])->post('/create_year', 'App\Http\Controllers\YearController@create_year')->name('create_year');
Route::middleware(['auth:sanctum', 'verified'])->post('/create_event', 'App\Http\Controllers\EventController@create_event')->name('create_event');
Route::middleware(['auth:sanctum', 'verified'])->get('delete/{id}', 'App\Http\Controllers\DashboardController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('update/{id}', 'App\Http\Controllers\DashboardController@');
Route::middleware(['auth:sanctum', 'verified'])->get('update_view/{id}', 'App\Http\Controllers\DashboardController@update_view');
Route::middleware(['auth:sanctum', 'verified'])->get('update/{id}', 'App\Http\Controllers\DashboardController@update');
Route::middleware(['auth:sanctum', 'verified'])->get('show_calendar', 'App\Http\Controllers\CalendarController@index')->name('show_calendar');
Route::middleware(['auth:sanctum', 'verified'])->post('insert', 'App\Http\Controllers\CalendarController@create');
Route::middleware(['auth:sanctum', 'verified'])->get('show/{id}', 'App\Http\Controllers\DashboardController@show');
Route::middleware(['auth:sanctum', 'verified'])->get('delete_calendar/{id}', 'App\Http\Controllers\CalendarController@delete_calendar');
Route::middleware(['auth:sanctum', 'verified'])->get('delete_year/{id}', 'App\Http\Controllers\YearController@delete_year');
