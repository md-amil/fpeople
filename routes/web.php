<?php
use App\Post;

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



Route::get('/api/posts', function () {
    return Post::latest()->with('user', 'comments')->get();
});


Route::get('/', 'HomeController@index');
Route::resource('posts', 'PostController');
route::post('/posts/{post}/comments', 'CommentController@store');
Route::get('/posts/{post}/like', 'VoteController@store');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/profile', 'ProfileController@profile');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/profile/avatar', 'ProfileController@updateProfile');
