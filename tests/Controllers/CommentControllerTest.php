<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\CommentsController;
use App\Contracts\CommentContract;
use Illuminate\Http\Request;
use App\Post;
use Mockery;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class CommentControllerTest extends TestCase
{
    use DatabaseMigrations;

    protected $controller;
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = Mockery::spy(CommentContract::class);
        $this->controller = new CommentsController($this->service);
    }

    /** @test */
    public function createComment_hits_correctly_with_response()
    {
        $request = new Request;
        $request->user_id = 1;
        $request->post_id = 1;
        $request->body = 'www';

        $data = [
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'body' => $request->body
        ];

        $this->service
            ->shouldReceive('createComment')
            ->with($data);

        $this->controller->createComment($request);
    }
}