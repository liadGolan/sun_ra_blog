<?php

namespace App\Services;

use App\Post;
use App\Comment;
use App\Contracts\PostContract;
use App\Contracts\CommentContract;

class PostService implements PostContract
{
    protected $commentUtility = null;
    public function __construct(CommentContract $commentUtility)
    {
        $this->commentUtility = $commentUtility;
    }
    public function getAllPosts(): array
    {
        return Post::all()->toArray();
    }

    public function getPostWithComments($id): array
    {
        $post = Post::whereIn('id', [$id])
            ->with('comments')
            ->first()
            ->toArray();
        
        $comments = [];
 
        foreach($post['comments'] as $comment) {
            $comModel = $this->commentUtility->getRepliesForComment($comment['id']);

            \array_push($comments, $comModel['replies']);
        }


        for($i = 0; $i < \count($post['comments']); $i++) {
            $post['comments'][$i]['replies'] =  $comments[$i];
        }

        return $post;

    }

    public function createPost(array $data)
    {
        $post = new Post;

        $post->user_id = $data['user_id'];
        $post->title = $data['title'];
        $post->body = $data['body'];

        $post->save();
    }
}