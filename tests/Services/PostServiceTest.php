<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Services\PostService;
use App\Contracts\CommentContract;
use App\Post;
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

    private function generatePost($id)
    {
        $post = factory(Post::class)->make([
            'id' => $id
        ])->save();
    }
}