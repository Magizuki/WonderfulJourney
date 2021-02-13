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

Route::get('/', 'ArticleController@getAllArticle');
Route::get('/fullstory/{id}', 'ArticleController@getFullStoryArticle');
Route::get('/{category}', 'ArticleController@getCategorizeArticle');
Route::get('/public/about-us', function(){
    return view('about_us',['Name' => 'aboutUs']);
});
