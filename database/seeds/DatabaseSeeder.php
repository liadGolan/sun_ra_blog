<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(RepliesSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
