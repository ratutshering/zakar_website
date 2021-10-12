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

Route::get('get_calendar/{month}', 'App\Http\Controllers\CalendarController@get_calendar');
Route::get('view_events', 'App\Http\Controllers\EventController@view_events');
Route::get('get_event/{date}', 'App\Http\Controllers\EventController@get_event');
