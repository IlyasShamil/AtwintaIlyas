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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* Admin */
Route::group(['middleware' => ['status' , 'auth']], function() {
	$groupData = [
		'namespace' => 'Blog\Admin',
		'prefix' => 'admin',
	];

	Route::group($groupData, function() {
		Route::resource('index' , 'MainController')->names('blog.admin.index');
	});
});
/* User */
Route::group(['middleware' => ['statusUser' , 'auth']], function() {
	$groupData = [
 		'namespace' => 'Blog\User',
		'prefix' => 'user',
	];

	Route::group($groupData, function() {
		Route::resource('index' , 'MainController')->names('blog.user.index');
	});
});
/* Worker */
Route::group(['middleware' => ['statusWorker' , 'auth']], function() {
	$groupData = [
			'namespace' => 'Blog\Worker',
		'prefix' => 'worker',
	];

	Route::group($groupData, function() {
	Route::resource('index' , 'MainController')->names('blog.worker.index');
	});
});

/*Маршруты для CRUD операций*/
Route::get('groups' , 'CRUDController@index')->name('groups.index');

Route::get('groups/create' , 'CRUDController@create')->name('groups.create');

Route::post('groups/store' , 'CRUDController@store')->name('groups.store');

Route::get('groups/{id}/edit' , 'CRUDController@edit')->name('groups.edit');

Route::put('groups/{id}/update' , 'CRUDController@update')->name('groups.update');


Route::get('groups/{id}/show' , 'CRUDController@show')->name('groups.show');





