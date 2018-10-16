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

// Route::get('/', function () {
//     // return view('welcome');
//     return 'hello world ';
// });
// Route::get('/hello', function () {
//     // return view('welcome');
//     return '<h1>hello world</h1> ';
// });

// new page view

//dynamic route
// Route::get('/user/{id}', function ($id) {
//     return 'This is user'.'   '.$id;
// });
// passed function in controller as arg to route
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about' );
Route::get('/services','PagesController@services' );
Route::resource('posts','PostsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
