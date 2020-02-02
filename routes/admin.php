<?php


Route::get('/','DashboardController@index')->name('admin.dashboard');


Route::get('/login','LoginController@showLoginForm')->name('admin.login');
Route::post('/login','LoginController@login')->name('admin.login.post');
Route::get('/logout','LoginController@logout')->name('admin.logout');