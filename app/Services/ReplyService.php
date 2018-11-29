<?php

namespace App\Services;

use App\Reply;
use App\Contracts\ReplyContract;

class ReplyService implements ReplyContract
{
    public function createReply($data)
    {
        $comment = new Reply;

        $comment->user_id = $data['user_id'];
        $comment->comment_id = $data['comment_id'];
        $comment->body = $data['body'];

        $comment->save();
    }

}