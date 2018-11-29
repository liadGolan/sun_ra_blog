<?php

declare(strict_types=1);

namespace App\Contracts;

interface PostContract
{
    public function getAllPosts(): array;

    public function getPostWithComments($id): array;

    public function createPost(array $data);
}