<?php

namespace App;

use Mongolid\Laravel\AbstractModel;

class Post extends AbstractModel
{
    protected $collection = 'posts';

    protected $rules = [
        'title' => 'required|string|max:100',
        'content' => 'required|string',
    ];

    // $post->errors()->all();

    public function author()
    {
        return $this->referencesOne(Author::class);
    }

    public function comments()
    {
        return $this->embedsMany(Comment::class);
    }

}

