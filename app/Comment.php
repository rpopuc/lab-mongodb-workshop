<?php

namespace App;

use Mongolid\Laravel\AbstractModel;

class Comment extends AbstractModel
{
    protected $collection = null;

    protected $rules = [
        'content' => 'required|string',
    ];

    public function author()
    {
        return $this->referencesOne(Author::class);
    }
}
