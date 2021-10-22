<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    $posts = File::files(resource_path('posts/'));
    $documents = [];
    foreach ($posts as $post) {
        $doc = YamlFrontMatter::parseFile($post);
        $documents[] = new Post($doc->title, $doc->excerpt, $doc->date, $doc->slug, $doc->body());
    }
    return view('posts', ['posts' => $documents]);
});


Route::get('post/{post}', function ($slug) {
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z\-]+');