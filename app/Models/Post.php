<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
//    use HasFactory;

    public $title;

    public $excerpt;

    public $data;

    public $body;

    public $slug;

    public function __construct($title, $excerpt, $data, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->data = $data;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        return collect(File::files(resource_path("posts")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug,
            ));
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}
