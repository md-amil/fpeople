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
Route::post('/posts/{post}/like', 'VoteController@store');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
