<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    $posts = Post::latest()->with('category', 'author')->get();

    return view('posts', ['posts' => $posts]);
});



Route::get('post/{post}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('/user/{user}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts
    ]);
});