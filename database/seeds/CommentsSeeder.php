<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // comments on posts
        DB::table('comments')->insert([
            'id' => 1,
            'user_id' => 2,
            'post_id' => 1,
            'body' => "I Agree",
        ]);

        DB::table('comments')->insert([
            'id' => 2,
            'user_id' => 2,
            'post_id' => 1,
            'body' => "Yes",
        ]);
    }
}
