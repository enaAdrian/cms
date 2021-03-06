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
Auth::routes();

Route::get('/', ['as' => 'welcome', 'uses' => 'NewsController@index']);
Route::get('/contact', 'PagesController@getContact');
Route::get('/gallery', ['as' => 'gallery', 'uses' => 'PagesController@getGallery']);
Route::get('/multimedia', ['as' => 'multimedia', 'uses' => 'PagesController@getMedia']);



Route::middleware(['auth'])->group(function(){
  Route::resource('media', 'MediaController');
  Route::resource('discography', 'DiscographyController');
  Route::resource('posts', 'PostController');

  Route::get('/home', 'HomeController@index')->name('home');
});
