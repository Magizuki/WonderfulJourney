<?php

use App\Http\Controllers\AuthController;
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
Route::get('/category/{category}', 'ArticleController@getCategorizeArticle');
Route::get('/wonderful-world/about-us', function(){
    return view('about_us',['Name' => 'aboutUs']);
});
Route::get('/wonderful-world/register', 'AuthController@showRegister');
Route::get('/wonderful-world/login', 'AuthController@showlogin');
Route::post('/doRegister', 'AuthController@doRegister');
Route::post('/doLogin', 'AuthController@doLogin');
Route::get('/greeting', function(){
    return view('greeting', ['Name' => 'greeting']);
});
Route::get('/logout', 'AuthController@doLogout');
Route::get('/admin/usermenu','AdminController@showUserMenu')->middleware('admin_only');
Route::get('/delete/user/{id}','AdminController@deleteUser')->middleware('admin_only');
