<?php

namespace App\Services;

use App\Post;
use App\Comment;
use App\Contracts\CommentContract;

class CommentService implements CommentContract
{
    public function getRepliesForComment($id): array
    {
        return Comment::whereIn('id', [$id])
            ->with('replies')
            ->first()
            ->toArray();
    }

    public function createComment($data)
    {
        $comment = new Comment;

        $comment->user_id = $data['user_id'];
        $comment->post_id = $data['post_id'];
        $comment->body = $data['body'];

        $comment->save();
    }

}