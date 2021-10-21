<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public static function find($slug)
    {
        if (!file_exists($path = (resource_path("posts/{$slug}.html")))) {
            throw new ModelNotFoundException();
        }
        return cache()->remember("post.{$slug}", now()->addSecond(3), fn () => file_get_contents($path));
    }

    public static function all()
    {
        $posts = File::files(resource_path('posts/'));
        return array_map(fn ($post) => $post->getContents(), $posts);
    }
}
