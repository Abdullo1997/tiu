<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'HomeController@index')->name('frontend.index');

Route::get('/search','StudentController@search')->name('search');

Route::get('/studends/create{techer_id?}','StudentController@create');
Route::resource('/student-api', 'Api\ApiController');

Route::get('/big/{teacher}','TeacherController@student')->name('big');
Route::resource('/teachers','TeacherController');
