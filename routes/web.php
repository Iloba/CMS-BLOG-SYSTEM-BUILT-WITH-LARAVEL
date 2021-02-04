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
//Route For Our index Page from our pagesController
Route::get('/', 'pagesController@index');

//Add Another Route For our About Page in Our Pages Folder from the PagesController 
Route::get('/about', 'pagesController@about');

//Add Another Route For our Services Page in Our Pages Folder from the PagesController 
Route::get('/services', 'pagesController@services');

//Add Another Route
Route::get('/contact', 'pagesController@contact');


Route::resource('posts', 'PostsController');


//Add A Route Dynamically
// Route::get('/users/{id}', function($id){
//     return 'This is User '. $id;
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
