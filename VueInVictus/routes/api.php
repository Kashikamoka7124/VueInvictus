<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/homeData', 'ApiController@index')->name('homeData');
Route::get('/blogData', 'ApiController@blogData')->name('blogData');
Route::get('/postData/{id}', 'ApiController@postData')->name('postData');
Route::get('/portfoliosData', 'ApiController@portfoliosData')->name('postData');
Route::get('/portfolioData/{id}', 'ApiController@portfolioData')->name('postData');
