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

Route::group(['prefix' => 'admin-dtw'], function(){
    // Auth::routes();
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::post('/password/confirm', 'Auth\ConfirmPasswordController@confirm');
    Route::get('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');

    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
});

Route::group(['prefix' => 'admin-dtw', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'slider', 'middleware' => 'auth'], function () {
        Route::get('/slider', 'SliderController@index')->name('admin.slider.index');
        Route::get('/slider-create', 'SliderController@store')->name('admin.slider.create');
        Route::get('/slider-edit', 'SliderController@edit')->name('admin.slider.edit');
        Route::get('/slider-update', 'SliderController@update')->name('admin.slider.update');
        Route::delete('/slider-delete', 'SliderController@delete')->name('admin.slider.delete');
    });
    Route::group(['prefix' => 'about', 'middleware' => 'auth'], function () {
        Route::get('/about', 'SliderController@index')->name('admin.about.index');
        Route::get('/about-create', 'SliderController@store')->name('admin.about.create');
        Route::get('/about-edit', 'SliderController@edit')->name('admin.about.edit');
        Route::get('/about-update', 'SliderController@update')->name('admin.about.update');
        Route::delete('/about-delete', 'SliderController@delete')->name('admin.about.delete');
    });
    Route::group(['prefix' => 'porfolio', 'middleware' => 'auth'], function () {
        Route::get('/porfolio', 'SliderController@index')->name('admin.porfolio.index');
        Route::get('/porfolio-create', 'SliderController@store')->name('admin.porfolio.create');
        Route::get('/porfolio-edit', 'SliderController@edit')->name('admin.porfolio.edit');
        Route::get('/porfolio-update', 'SliderController@update')->name('admin.porfolio.update');
        Route::delete('/porfolio-delete', 'SliderController@delete')->name('admin.porfolio.delete');
    });
    Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function () {
        Route::get('/contact', 'SliderController@index')->name('admin.contact.index');
        Route::get('/contact-create', 'SliderController@store')->name('admin.contact.create');
        Route::get('/contact-edit', 'SliderController@edit')->name('admin.contact.edit');
        Route::get('/contact-update', 'SliderController@update')->name('admin.contact.update');
        Route::delete('/contact-delete', 'SliderController@delete')->name('admin.contact.delete');
    });
});

Route::get('/', function () {
    return view('view.home');
});
Route::get('/test', function () {
    return view('home');
});

