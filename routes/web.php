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

Route::get('/', 'SiteController@home');
Route::get('/about', 'SiteController@about');
Route::get('/register', 'SiteController@register');
Route::post('/register/proses', 'SiteController@proses');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login/post', 'AuthController@postlogin')->name('post_login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){

	Route::get('/siswa', 'SiswaController@index');
	Route::post('/siswa/create', 'SiswaController@create');
	Route::get('/siswa/{id}/edit', 'SiswaController@edit')->name('siswa_edit');
	Route::post('/siswa/{id}/update', 'SiswaController@update')->name('update_siswa');
	Route::get('/siswa/{id}/delete', 'SiswaController@delete')->name('siswa_delete');

	//model bindding siswa
	Route::get('/siswa/{siswa}/profile', 'SiswaController@profile');


	Route::post('/siswa/{id}/addnilai', 'SiswaController@addnilai');

	Route::get('/guru/{id}/profile', 'GuruController@profile');

	Route::get('/siswa/{id}/{id_nilai}/delete', 'SiswaController@deletenilai')->name('delete_nilai');

	Route::get('/posts', 'PostController@index');
	Route::get('/posts/add', 'PostController@index')->name('post.add');

});

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function(){

	Route::get('/dashboard', 'DashboardController@index');

});

Route::get('/{slug}',[
	'uses' => 'SiteController@singlepost',
	'as' => 'site.single.post'
]);