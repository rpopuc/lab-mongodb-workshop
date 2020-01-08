<?php

namespace App;

use Mongolid\Laravel\AbstractModel;

class Author extends AbstractModel
{
    protected $collection = 'authors';

    protected $rules = [
        'name' => 'required|string|max:100',
        'avatar' => 'required|string',
    ];
}

