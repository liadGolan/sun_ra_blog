<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\ReplyService;
use App\Reply;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReplyServiceTest extends TestCase
{
    use DatabaseMigrations;

    public $service;
    
    public function setUp()
    {
        parent::setUp();
        $this->service = new ReplyService();
    }

    /** @test */
    public function createReply_properly_creates_a_reply()
    {
        $db_data = [];
        $this->assertDatabaseMissing('replies', $db_data);
        for($i = 1; $i < 50; $i++) {
            $data = [
                'user_id' => 1,
                'comment_id' => 1,
                'body' => 'www'
            ];

            $this->service->createReply($data);

            $db_data = [
                'id' => $i,
                'user_id' => 1,
                'comment_id' => 1,
                'body' => 'www'
            ];

            $this->assertDatabaseHas('replies', $db_data);
        }
    }
}