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

    public function getPostWithComments($id): array
    {
        return Post::whereIn('id', [$id])
            ->with('comments')
            ->first()
            ->toArray();
    }
}