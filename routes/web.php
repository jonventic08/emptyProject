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

Route::GET('admin_login','AdminAuth\LoginController@showLoginForm');
Route::POST('admin_login','AdminAuth\LoginController@login');
Route::POST('admin_logout','AdminAuth\LoginController@logout');
Route::POST('admin_password/email','AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::GET('admin_password/reset','AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::POST('admin_password/reset','AdminAuth\ResetPasswordController@reset');
Route::GET('admin_password/reset/{token','AdminAuth\ResetPasswordController@showResetForm');
Route::GET('admin_register','AdminAuth\RegisterController@showRegistrationForm');
Route::POST('admin_register','AdminAuth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_home', 'AdminHomeController@index')->name('home');

