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

//Route::get('/', function () {
  //  return view('/layouts/master');
//});

Auth::routes();

Route::get('/', function()
	{
		return redirect('/login');
	});

Route::group(['middleware' => ['auth']], function() {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/teacher', 'TeacherController@index')->name('teacher_index');
	Route::post('/teacher', 'TeacherController@save')->name('teacher_save');
    Route::get('/teacher/create', 'TeacherController@create')->name('teacher_create');
    Route::get('/teacher/{id}/delete', 'TeacherController@delete')->name('teacher_delete');
    Route::get('/teacher/{id}', 'TeacherController@edit')->name('teacher_edit');
    Route::post('/teacher/{id}', 'TeacherController@update')->name('teacher_update');

});



