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

Route::get('/', function () {
    return view('welcome');
});

/*
ajax list section
*/
Route::get('/msys/list','ListController@index');
Route::post('/msys/list','ListController@create');
Route::post('/msys/delete','ListController@delete');


// pages controller section

Route::get('/msys', 'PagesController@getIndex');


Route::get('/msys/contact', 'PagesController@getContact');
Route::get('/msys/404', 'PagesController@get404');

Route::post('/msys/getResult','PagesController@getResult');


/*
student admission section
*/

Route::resource('/msys/admission', 'AdmissionResultController');


/*
Student profile section
*/
Route::resource('/msys/student-profile', 'ApplicationController');

