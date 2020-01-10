<?php


Route::get('/', 'UploaderController@indextwo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/frontpage/admin', 'UploaderController@index')->name('adminpage')->middleware('auth:admin');
Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');


Route::post('/adding', 'UploaderController@store')->name('upload_produk');
Route::delete('/products/{id}', 'UploaderController@destroy')->name('delete_produk');
Route::get('/produks/{id}/showit', 'UploaderController@show')->name('showit');

Route::name('edit_blog_path')->get('/products/{id}/edit', 'UploaderController@edit');
Route::name('update_blog_path')->put('/products/{id}', 'UploaderController@update');

// Route::get('search', 'SearchController@index')->name('search');
Route::get('autocomplete', 'UploaderController@autocomplete')->name('autocomplete');





