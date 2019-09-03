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

//form contact
Route::get('/contact-us','ContactController@index')->name('form-contact');
//send mail contact
Route::post('/contact-us','ContactController@sendContact')->name('send-contact');





//user controller
Route::group([
	'prefix'=> 'user',
	'as'=>'user.',
	'namespace'=>'User'
], function(){
Route::get('/users','UserController@index')->name('user_login');

Route::get('/products','UserController@listProduct')->name('listProduct');
});

//admin controller
Route::group([
	'prefix'=>'admin',
	'as'=>'admin.',
	'namespace'=>'Admin',
	'middleware'=>['Is.Admin']
],function(){
Route::get('/admin','DashboardController@index')->name('dashboard');
//manage category
Route::get('/categories','CategoryController@index')->name('listCate');
Route::get('/categories/create','CategoryController@create')->name('createCate');
Route::post('/categories','CategoryController@store')->name('storeCategory');
Route::get('/categories/{id}/edit','CategoryController@edit')->name('editCategory');
Route::put('/categories/{id}','CategoryController@update')->name('updateCategory');
Route::delete('categories/{id}/delete','CategoryController@destroy')->name('deleteCategory');
Route::get('/categories/{id}/listchildren','CategoryController@listChildrenCategory')->name('list-children');
//manage product
Route::get('/products','ProductController@index')->name('listProduct');
Route::get('/products/create','ProductController@create')->name('createProduct');
Route::post('/products','ProductController@store')->name('storeProduct');
Route::get('/products/{id}/edit','ProductController@edit')->name('editProduct');
Route::put('/products/{id}','ProductController@update')->name('updateProduct');
Route::delete('/products/{id}/delete','ProductController@destroy')->name('deleteProduct');
//manage user
Route::get('/users','UserController@index')->name('listUser');
Route::get('/users/{id}/edit','UserController@edit')->name('editUser');
Route::put('/users/{id}','UserController@update')->name('updateUser');
Route::delete('/users/{id}/delete','UserController@destroy')->name('deleteUser');
//manage order
Route::get('/orders','OrderController@index')->name('listOrder');
Route::get('/orders/{id}/edit','OrderController@edit')->name('editOrder');
Route::put('/orders/{id}','OrderController@update')->name('updateOrder');
Route::delete('/orders/{id}/delete','OrderController@destroy')->name('deleteOrder');
//form confirm
Route::get('/confirms','OrderController@formConfirm')->name('form-confirm');
//send mail confirm
Route::post('/confirms','OrderController@sendConfirmOrder')->name('send-confirm');
});

