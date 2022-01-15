<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

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
    $posts = Post::latest();
    $search = request('search');
    if ($search) {
        $posts->where('title', 'like', "%$search%")->orWhere('body', 'like', "%$search%");
    }
    return view('posts', ['posts' => $posts->get(), 'categories' => Category::all()]);
})->name('home');



Route::get('post/{post}', function (Post $post) {
    return view('post', [
        'post' => $post,
        'categories' => Category::all()
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('/user/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts,
        'categories' => Category::all()
    ]);
});