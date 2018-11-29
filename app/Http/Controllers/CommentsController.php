<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\CommentContract;

class CommentsController extends Controller
{
    protected $commentUtility = null;

    public function __construct(CommentContract $commentUtility)
    {
        $this->commentUtility = $commentUtility;
    }

    public function createComment(Request $request)
    {
        $data = [
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'body' => $request->body
        ];

        $this->commentUtility->createComment($data);
    }
}
