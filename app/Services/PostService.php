<?php

namespace App\Services;

use App\Post;
use App\Contracts\PostContract;

class PostService implements PostContract
{
    public function getAllPosts(): array
    {
        return Post::all()->toArray();
    }
}