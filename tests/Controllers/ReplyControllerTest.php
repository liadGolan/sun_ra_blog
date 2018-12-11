<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\RepliesController;
use App\Contracts\ReplyContract;
use Illuminate\Http\Request;
use App\Post;
use Mockery;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReplyControllerTest extends TestCase
{
    use DatabaseMigrations;

    protected $controller;
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = Mockery::spy(ReplyContract::class);
        $this->controller = new RepliesController($this->service);
    }

    /** @test */
    public function createReply_hits_correctly_with_response()
    {
        $request = new Request;
        $request->user_id = 1;
        $request->comment_id = 1;
        $request->body = 'www';

        $data = [
            'user_id' => $request->user_id,
            'comment_id' => $request->comment_id,
            'body' => $request->body
        ];

        $this->service
            ->shouldReceive('createReply')
            ->with($data);

        $this->controller->createReply($request);
    }
}