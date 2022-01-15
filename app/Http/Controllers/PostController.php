<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        $search = request('search');
        if ($search)
            $posts
                ->where('title', 'like', "%$search%")
                ->orWhere('body', 'like', "%$search%");
        return view('posts', ['posts' => $posts->get(), 'categories' => Category::all()]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }
}
