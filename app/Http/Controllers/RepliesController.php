<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\ReplyContract;

class RepliesController extends Controller
{
    protected $replyUtility = null;
    
    public function __construct(ReplyContract $replyUtility) 
    {
        $this->replyUtility = $replyUtility;
    }

    public function createReply(Request $request)
    {
        $data = [
            'user_id' => $request->user_id,
            'comment_id' => $request->comment_id,
            'body' => $request->body
        ];

        $this->replyUtility->createReply($data);
    }
}
