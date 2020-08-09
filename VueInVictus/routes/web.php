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

// Route::get('/{any}', 'SpaController@index')->where('any', '.*');
Route::get('/', 'SpaController@index');
Route::get('/about', 'SpaController@index');
Route::get('/blog', 'SpaController@index');
Route::get('/post/{id}', 'SpaController@index');
Route::get('/portfolio', 'SpaController@index');
Route::get('/portfolio/{id}', 'SpaController@index');
Route::get('/services', 'SpaController@index');
Route::get('/career', 'SpaController@index');
Route::get('/policy', 'SpaController@index');
Route::get('/contact', 'SpaController@index');



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/create-portfolio', 'PortfolioController@create')->name('create-portfolio');
Route::post('/add-portfolio', 'PortfolioController@store')->name('add-portfolio');
Route::DELETE('/delete-portfolio/{id}', 'PortfolioController@destroy')->name('delete-portfolio');
Route::get('/edit-portfolio/{id}', 'PortfolioController@edit')->name('edit-portfolio');
Route::get('/view-portfolio/{id}', 'PortfolioController@show')->name('view-portfolio');
Route::put('/update-portfolio/{id}', 'PortfolioController@update')->name('update-portfolio');

Route::get('/update-data', 'DataController@edit')->name('edit-data');
Route::put('/update-data', 'DataController@update')->name('update-data');


Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/create-post', 'PostController@create')->name('create-post');
Route::post('/add-post', 'PostController@store')->name('add-post');
Route::DELETE('/delete-post/{id}', 'PostController@destroy')->name('delete-post');
Route::get('/edit-post/{id}', 'PostController@edit')->name('edit-post');
Route::get('/view-post/{id}', 'PostController@show')->name('view-post');
Route::put('/update-post/{id}', 'PostController@update')->name('update-post');


Route::get('/industries', 'IndustryController@index')->name('industries');
Route::get('/create-industry', 'IndustryController@create')->name('create-industry');
Route::post('/add-industry', 'IndustryController@store')->name('add-industry');
Route::DELETE('/delete-industry/{id}', 'IndustryController@destroy')->name('delete-industry');
Route::get('/edit-industry/{id}', 'IndustryController@edit')->name('edit-industry');
Route::get('/view-industry/{id}', 'IndustryController@show')->name('view-industry');
Route::put('/update-industry/{id}', 'IndustryController@update')->name('update-industry');


Route::get('/reviews', 'ReviewController@index')->name('reviews');
Route::get('/create-review', 'ReviewController@create')->name('create-review');
Route::post('/add-review', 'ReviewController@store')->name('add-review');
Route::DELETE('/delete-review/{id}', 'ReviewController@destroy')->name('delete-review');
Route::get('/edit-review/{id}', 'ReviewController@edit')->name('edit-review');
Route::get('/view-review/{id}', 'ReviewController@show')->name('view-review');
Route::put('/update-review/{id}', 'ReviewController@update')->name('update-review');
});
