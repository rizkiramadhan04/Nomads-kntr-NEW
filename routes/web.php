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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail', 'HomeController@detail')->name('detail');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::get('/success', 'HomeController@success')->name('success');

Route::get('/registerPage', 'AuthController@regisPage')->name('register');
Route::post('/register', 'AuthController@register');

Route::get('/loginPage', 'AuthController@loginPage')->name('login');
Route::post('/login', 'AuthController@login');

Route::get('/forgot_password_page', 'AuthController@forgotPasswordPage')->name('forgotPassword');

Route::post('/logout', 'AuthController@logout')->name('logout');
