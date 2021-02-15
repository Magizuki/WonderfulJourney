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

//Admin, User, and Guest
Route::get('/fullstory/{id}', 'ArticleController@getFullStoryArticle');

//Guest only
Route::get('/', 'ArticleController@getAllArticle');
Route::get('/category/{category}', 'ArticleController@getCategorizeArticle');
Route::get('/wonderful-world/about-us', function(){
    return view('about_us',['Name' => 'aboutUs']);
});
Route::get('/wonderful-world/register', 'AuthController@showRegister');
Route::get('/wonderful-world/login', 'AuthController@showlogin');
Route::post('/doRegister', 'AuthController@doRegister');
Route::post('/doLogin', 'AuthController@doLogin');

//Admin and User
Route::get('/greeting', function(){
    return view('greeting', ['Name' => 'greeting']);
});

//Admin only
Route::get('/logout', 'AuthController@doLogout');
Route::get('/admin/usermenu', 'AdminController@showUserMenu')->middleware('admin_only');
Route::get('/delete/user/{id}', 'AdminController@deleteUser')->middleware('admin_only');
Route::get('/admin/usermenu/{id}', 'AdminController@showUserArticleMenu')->middleware('admin_only');
Route::get('/admin/usermenu/{user_id}/delete/{article_id}', 'AdminController@deleteUserArticle')->middleware('admin_only');

//User only
Route::get('/user/profilemenu', 'UserController@showProfile')->middleware('user_only');
Route::post('/user/profilemenu/{id}', 'UserController@updateUserProfile')->middleware('user_only');
Route::get('/user/blogmenu/{id}', 'UserController@showBlogMenu')->middleware('user_only');
Route::get('/user/blogmenu/delete/{id}', 'UserController@deleteArticle')->middleware('user_only');
Route::get('/user/createblog', 'UserController@showCreateBlog')->middleware('user_only');
Route::post('/user/createblog/doCreateBlog/{id}', 'UserController@doCreateBlog')->middleware('user_only');


