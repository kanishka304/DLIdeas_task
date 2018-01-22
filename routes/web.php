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
 //   return view('home');
//});

Route::get('/', 'CreatesController@createsession');
Route::get('/qbank', 'CreatesController@home');


Route::get('/create', function(){
		return view('/inc/create');
});

Route::get('/createfitb', function(){
		return view('/inc/createfitb');
});


Route::post('/url/sessionexam', 'CreatesController@home');


Route::post('/url/insert', 'CreatesController@add');
Route::post('/url/insertfitb', 'CreatesController@addfitb');





Route::get('/update/{id}', 'CreatesController@update');






