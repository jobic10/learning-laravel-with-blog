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


    public static function all()
    {
        return  collect(File::files(resource_path('posts/')))->map(
            fn ($file) => YamlFrontMatter::parseFile($file)
        )->map(
            fn ($doc) => new Post($doc->title, $doc->excerpt, $doc->date, $doc->slug, $doc->body())
        );
    }
    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}