<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Content
{
    public $title;

    public $excerpt;

    public $date;

    public $body;

    public $slug;


    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all()
    {
//        return cache()->rememberForever('content_ai.all', function() {
        return collect(File::files(resource_path("components/contents")))
            ->map(function ($file) {
                return \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
            })
            ->map(function ($document) {
                return new \App\Models\Content(
                    $document->title,
                    $document->excerpt,
                    $document->date,
                    $document->body(),
                    $document->slug,
                );
            })
            ->sortBy('date');
//    });




    }

    public static function find($slug)
    {

        return static::all()->firstWhere('slug', $slug);

    }
}
