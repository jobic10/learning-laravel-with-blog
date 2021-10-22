<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;


    public function __construct($title, $excerpt, $date, $slug, $body)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug)
    {
        if (!file_exists($path = (resource_path("posts/{$slug}.html")))) {
            throw new ModelNotFoundException();
        }
        return cache()->remember("post.{$slug}", now()->addSecond(3), fn () => file_get_contents($path));
    }

    public static function all()
    {
        $posts = collect(File::files(resource_path('posts/')))->map(
            fn ($file) => YamlFrontMatter::parseFile($file)
        )->map(
            fn ($doc) => new Post($doc->title, $doc->excerpt, $doc->date, $doc->slug, $doc->body())
        );
        return $posts;
    }
}