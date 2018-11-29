<?php

declare(strict_types=1);

namespace App\Contracts;

interface CommentContract
{
    public function getRepliesForComment($id): array;

    public function createComment(array $data);
}