<?php

use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{post}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comments', [PostCommentController::class, 'store']);
Route::get('login', [SessionController::class, 'create'])->name('home')->middleware('guest');
Route::post('sessions', [SessionController::class, 'store'])->middleware('guest');
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::post('newsletter', function () {
    request()->validate([
        'email' => 'required|email'
    ]);

    try {
        (new Newsletter())->subscribe(request('email'));
    } catch (\Exception $e) {
        throw ValidationException::withMessages(['email' => 'Invalid email']);
    }
    return redirect('/')->with('success', 'You are now subscribed');
});