<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Mockery;

use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeControllerTest extends TestCase
{
    /** @test */
   public function index_directs_user_directly()
   {
       $response = $this->call('GET', '/');
       $response->assertStatus(200);
   }
}