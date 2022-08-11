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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/', 'ReviewController@top');
    Route::post('/reviews', 'ReviewController@store');
    Route::get('/reviews/{review}', 'ReviewController@show');
    Route::get('/reviews/{review}/edit', 'ReviewController@edit');
    Route::put('/reviews/{review}', 'ReviewController@update');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');