<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\PostService;
use App\Contracts\CommentContract;
use App\Post;
use App\Comment;
use Mockery;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostServiceTest extends TestCase
{
    use DatabaseMigrations;

    public $service;
    public $utility;

    public function setUp()
    {
        parent::setUp();
        $this->utility = Mockery::spy(CommentContract::class);
        $this->service = new PostService($this->utility);
    }

    /** @test */
    public function getAllPosts_returns_all_existing_posts()
    {
        for($i = 1; $i <= 50; $i += 1) {
            $this->generatePost($i);
            $this->assertEquals(count($this->service->getAllPosts()), $i);
            for($j = 1; $j <= $i; $j += 1){
                $this->assertEquals($this->service->getAllPosts()[$j - 1]['id'], $j);
            }
        }
    }

    /** @test */
    public function getPostWithComments_works_on_different_posts_when_multiple_posts_exist()
    {
        for($i = 1; $i < 50; $i += 1) {
            $this->generatePostWithComments($i);
            $commentOneData = [
                'id' => $i * 2 - 1,
                'post_id' => $i,
                'user_id' => '1',
                'body' => 'www',
                'created_at' => null,
                'updated_at' => null,
                'replies' => []
            ];
            $commentTwoData = [
                'id' => $i * 2,
                'post_id' => $i,
                'user_id' => '1',
                'body' => 'www',
                'created_at' => null,
                'updated_at' => null,
                'replies' => []
            ];
            $this->utility
                ->shouldReceive('getRepliesForComment')
                ->with($i * 2 - 1)
                ->andReturn($commentOneData);
            $this->utility
                ->shouldReceive('getRepliesForComment')
                ->with($i * 2)
                ->andReturn($commentTwoData);
            $data = [
                'id' => $i,
                'user_id' => '1',
                'title' => 'Wow',
                'body' => 'www',
                'created_at' => null,
                'updated_at' => null,
                'comments' => [$commentOneData, $commentTwoData]
            ];

            $this->assertEquals($this->service->getPostWithComments($i), $data);
        }
    }

    /** @test */
    public function createPost_creates_a_new_post()
    {
        $db_data = [];
        $this->assertDatabaseMissing('posts', $db_data);
        for($i = 1; $i < 50; $i++) {
            $data = [
                'user_id' => 1,
                'title' => 'Wow',
                'body' => 'www'
            ];

            $this->service->createPost($data);

            $db_data = [
                'id' => $i,
                'user_id' => 1,
                'title' => 'Wow',
                'body' => 'www'
            ];

            $this->assertDatabaseHas('posts', $db_data);
        }
    }

    private function generatePost($id)
    {
        $post = factory(Post::class)->make([
            'id' => $id
        ])->save();
    }

    private function generatePostWithComments($id)
    {
        $post = $this->generatePost($id);

        $commentOne = factory(Comment::class)->make([
            'id' => $id * 2 - 1,
            'post_id' => $id
        ])->save();

        $commentTwo = factory(Comment::class)->make([
            'id' => $id * 2,
            'post_id' => $id
        ])->save();
    }
}