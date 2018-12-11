<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\CommentService;
use App\Contracts\CommentContract;
use App\Reply;
use App\Comment;
use Mockery;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class CommentServiceTest extends TestCase
{
    use DatabaseMigrations;

    public $service;
    
    public function setUp()
    {
        parent::setUp();
        $this->service = new CommentService();
    }

    /** @test */
    public function getRepliesForComment_returns_a_comment_with_all_of_its_replies()
    {
        for($i = 1; $i < 50; $i++) {
            $this->createCommentWithReplies($i);
            $replyOne = [
                'id' => $i * 2 - 1,
                'comment_id' => $i,
                'user_id' => '1',
                'body' => 'www',
                'created_at' => null,
                'updated_at' => null
            ];
            $replyTwo = [
                'id' => $i * 2,
                'comment_id' => $i,
                'user_id' => '1',
                'body' => 'www',
                'created_at' => null,
                'updated_at' => null
            ];
            $data = [
                'id' => $i,
                'post_id' => '1',
                'user_id' => '1',
                'body' => 'www',
                'created_at' => null,
                'updated_at' => null,
                'replies' => [$replyOne, $replyTwo]
            ];
            $this->assertEquals($this->service->getRepliesForComment($i), $data);
        }
    }

    /** @test */
    public function createComment_creates_a_comment()
    {
        $db_data = [];
        $this->assertDatabaseMissing('comments', $db_data);
        for($i = 1; $i < 50; $i++) {
            $data = [
                'user_id' => 1,
                'post_id' => 1,
                'body' => 'www'
            ];

            $this->service->createComment($data);

            $db_data = [
                'id' => $i,
                'user_id' => 1,
                'post_id' => 1,
                'body' => 'www'
            ];

            $this->assertDatabaseHas('comments', $db_data);
        }
    }

    private function createComment($id)
    {
        $comment = factory(Comment::class)->make([
            'id' => $id,
            'post_id' => 1
        ])->save();
    }

    private function createCommentWithReplies($id)
    {
        $this->createComment($id);

        $replyOne = factory(Reply::class)->make([
            'id' => $id * 2 - 1,
            'comment_id' => $id
        ])->save();

        $replyTwo = factory(Reply::class)->make([
            'id' => $id * 2,
            'comment_id' => $id
        ])->save();
    }
}