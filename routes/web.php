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
Route::group(['prefix' => 'admin-dtg', 'middleware' => 'auth'], function () {
    Route::get('/slider', 'SliderController@index')->name('admin.slider.index');
    Route::get('/slider', 'SliderController@store')->name('admin.slider.create');
    Route::get('/slider', 'SliderController@edit')->name('admin.slider.edit');
    Route::get('/slider', 'SliderController@update')->name('admin.slider.update');
    Route::delete('/slider', 'SliderController@delete')->name('admin.slider.delete');

});
Route::get('/', function () {
    return view('view.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
