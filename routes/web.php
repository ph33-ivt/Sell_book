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
Route::get('/categories','CategoryController@index')->name('listCate');
Route::get('categories/create','CategoryController@create')->name('createCate');
Route::post('categories','CategoryController@store')->name('storeCategory');
Route::get('categories/{id}/edit','CategoryController@edit')->name('editCategory');
Route::put('categories/{id}','CategoryController@update')->name('updateCategory');
Route::get('categories/{id}/delete','CategoryController@destroy')->name('deleteCategory');

Route::group([
	'prefix'=> 'user',
	'as'=>'user.',
	'namespace'=>'User'
], function(){
Route::get('/user','UserController@index')->name('user_login');

});
Route::group([
	'prefix'=>'admin',
	'as'=>'admin.',
	'namespace'=>'Admin',
	'middleware'=>['Is.Admin']
],function(){
Route::get('/admin','DashboardController@index')->name('dashboard');
});