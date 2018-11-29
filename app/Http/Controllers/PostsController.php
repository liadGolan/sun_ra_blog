<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PostContract;

class PostsController extends Controller
{
    protected $postUtility = null;

    public function __construct(PostContract $postUtility)
    {
        $this->postUtility = $postUtility;
    }
    
    public function getAllPosts()
    {
        return $this->postUtility->getAllPosts();
    }

    public function getPostWithComments($id)
    {
        return $this->postUtility->getPostWithComments($id);
    }

    public function createPost(Request $request)
    {
        $data = [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'body' => $request->body
        ];

        $this->postUtility->createPost($data);
    }
}
