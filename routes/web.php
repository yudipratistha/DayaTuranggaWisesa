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

    Route::group(['prefix' => 'slider', 'middleware' => 'auth'], function () {
        Route::get('/', 'SliderController@index')->name('admin.slider.index');
        Route::post('/slider-create', 'SliderController@store')->name('admin.slider.create');
        Route::get('/slider-edit/edit/{id}', 'SliderController@edit')->name('admin.slider.edit');
        Route::post('/slider-update/{id}', 'SliderController@update')->name('admin.slider.update');
        Route::delete('/slider-delete/{id}', 'SliderController@destroy')->name('admin.slider.destroy');
    });

    Route::group(['prefix' => 'about', 'middleware' => 'auth'], function () {
        Route::get('/', 'AboutController@index')->name('admin.about.index');
        Route::post('/about-create', 'AboutController@store')->name('admin.about.create');
        Route::get('/about-edit/{id}', 'AboutController@edit')->name('admin.about.edit');
        Route::post('/about-update/{id}', 'AboutController@update')->name('admin.about.update');
        Route::post('/about-save/{id}', 'AboutController@saveAbout')->name('admin.about.save');
    });

    Route::group(['prefix' => 'service', 'middleware' => 'auth'], function () {
        Route::get('/', 'ServiceController@index')->name('admin.service.index');
        Route::post('/service-create', 'ServiceController@store')->name('admin.service.create');
        Route::get('/service-edit/{id}', 'ServiceController@edit')->name('admin.service.edit');
        Route::post('/service-update/{id}', 'ServiceController@update')->name('admin.service.update');
        Route::delete('/service-delete/{id}', 'ServiceController@destroy')->name('admin.service.destroy');
    });

    Route::group(['prefix' => 'portfolio', 'middleware' => 'auth'], function () {
        Route::get('/', 'PortfolioController@index')->name('admin.portfolio.index');
        Route::post('/portfolio-create', 'PortfolioController@store')->name('admin.portfolio.create');
        Route::get('/portfolio-edit/{id}', 'PortfolioController@edit')->name('admin.portfolio.edit');
        Route::post('/portfolio-update/{id}', 'PortfolioController@update')->name('admin.portfolio.update');
        Route::delete('/portfolio-delete/{id}', 'PortfolioController@destroy')->name('admin.portfolio.destroy');
    });

    Route::group(['prefix' => 'portfolio-tag', 'middleware' => 'auth'], function () {
        Route::get('/', 'PortfolioTagController@index')->name('admin.portfolio-tag.index');
        Route::post('/portfolio-tag-create', 'PortfolioTagController@store')->name('admin.portfolio-tag.create');
        Route::get('/portfolio-tag-edit/{id}', 'PortfolioTagController@edit')->name('admin.portfolio-tag.edit');
        Route::post('/portfolio-tag-update/{id}', 'PortfolioTagController@update')->name('admin.portfolio-tag.update');
        Route::delete('/portfolio-tag-delete/{id}', 'PortfolioTagController@destroy')->name('admin.portfolio-tag.destroy');
    });

    Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function () {
        Route::get('/', 'ContactController@index')->name('admin.contact.index');
        Route::get('/contact-create', 'ContactController@store')->name('admin.contact.create');
        Route::get('/contact-edit', 'ContactController@edit')->name('admin.contact.edit');
        Route::get('/contact-update', 'ContactController@update')->name('admin.contact.update');
        Route::delete('/contact-delete', 'ContactController@delete')->name('admin.contact.delete');
    });
});

Route::get('/', 'HomeController@index')->name('home.index');

// Route::get('/', function () {
//     return view('view.home');
// });
// Route::get('/home', function () {
//     return view('home');
// });

