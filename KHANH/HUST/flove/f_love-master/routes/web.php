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

//home
Route::get('/', 'PageController@homePage')->name('page.index');

//home after login
Route::get('home', 'PageController@homePage_after_login')->name('home.index');

//login
Route::get('login', 'Auth\LoginController@login')->name('login.index');

//Register
Route::get('register', 'Auth\RegisterController@register')->name('register.index');

//edit_infor
Route::get('edit_infor', 'Auth\EditController@edit_infor')->name('edit_infor.index');
Route::get('edit_Female_infor', 'Auth\EditController@edit_Female_infor')->name('edit_Fe_infor.index');

//update_infor
Route::get('update', 'Auth\UpdateController@update')->name('update.index');

//function1: expeterp
Route::get('expeter_list', 'PageController@expeter_list')->name('expeter_list.index');

Route::get('expeter_result', 'PageController@expeter_result')->name('expeter_result.index');


