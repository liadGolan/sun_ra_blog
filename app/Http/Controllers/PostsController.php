<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
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
}
