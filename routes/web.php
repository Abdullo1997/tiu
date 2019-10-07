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

Route::get('/','HomeController@index')->name('frontend.index');

Route::get('til/{lang}', function($lang){
    \Session::put('lang',$lang);
    return redirect()->back();
})->name('tillar');


Auth::routes();

Route::get('/', 'HomeController@index')->name('frontend.index');
Route::get('/search','StudentController@search')->name('search');

Route::get('/students', function(){
    return redirect()->route('students.index');
});
Route::group(['prefix' => 'admin'], function(){
    Route::get('/studends/create{techer_id?}','StudentController@create');
    Route::resource('/students', 'StudentController');
    Route::get('/big/{teacher}','TeacherController@student')->name('big');
    Route::resource('/teachers','TeacherController');
    Route::resource('/group', 'GroupController');
    Route::resource('/faculty', 'FacultyController');
});




// Route::delete('/del/{student}','TeacherController@del')->name('del');
