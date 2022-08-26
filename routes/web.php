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
    Route::delete('/reviews/{review}', 'ReviewController@delete');
    Route::get('/reviews/{review}/edit', 'ReviewController@edit');
    Route::put('/reviews/{review}', 'ReviewController@update');
    Route::get('/user', 'UserController@mypage');
    Route::get('/research', 'ReviewController@research');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');