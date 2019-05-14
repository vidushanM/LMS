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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/logout', 'Auth\LoginController@userlogout')->name('user.logout');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\Admin\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/logout', 'Auth\Admin\AdminLoginController@logout')->name('admin.logout');

    // password reset routes
    Route::post('/password/email', 'Auth\Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.passwords.email');
    Route::get('/password/reset', 'Auth\Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admin.passwords.request');
    Route::post('/password/reset', 'Auth\Admin\AdminResetPasswordController@reset')->name('admin.passwords.update');
    Route::get('/password/reset/{token}', 'Auth\Admin\AdminResetPasswordController@showResetForm')->name('admin.passwords.reset');
});

