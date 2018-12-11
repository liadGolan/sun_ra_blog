<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\PostsController;
use App\Contracts\PostContract;
use Illuminate\Http\Request;
use App\Post;
use Mockery;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostControllerTest extends TestCase
{
    protected $controller;
    protected $service;

    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->service = Mockery::spy(PostContract::class);
        $this->controller = new PostsController($this->service);
    }

    /** @test */
    public function getAllPostsRoute_hits_correctly()
    {
        $response = $this->call('GET', '/api/posts');
        $response->assertStatus(200);
    }

    /** @test */
    public function getPostWithCommentRoute_hits_correctly()
    {
        $this->generatePost(1);
        $response = $this->call('GET', '/api/post/1');
        $response->assertStatus(200);
    }

    /** @test */
    public function createPost_hits_correctly_with_response()
    {
        $request = new Request;
        $request->user_id = 1;
        $request->title = 'wow';
        $request->body = 'www';

        $data = [
            'user_id' => $request->user_id,
            'title' => $request->title,
            'body' => $request->body
        ];

        $this->service
            ->shouldReceive('createPost')
            ->with($data);

        $this->controller->createPost($request);
    }

    private function generatePost($id)
    {
        $post = factory(Post::class)->make([
            'id' => $id
        ])->save();
    }
}