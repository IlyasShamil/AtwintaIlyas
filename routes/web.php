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
//  Route::group(['middleware' => ['status' , 'auth']], function() {
// 	$groupData = [
//  		'namespace' => 'Blog\User',
// 		'prefix' => 'user',
// 	];

// 	Route::group($groupData, function() {
// 		Route::resource('index' , 'MainController')->names('blog.user.index');
// 	});
// });











Route::group(['middleware' => ['auth']], function() {
	Route::get('/user/index', function(){
		
	return view('blog.user.index'); });
	});

// Route::get('/user/index', function () {
//     return view('blog.user.index');
// });
