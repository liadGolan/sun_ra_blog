<?php

use Illuminate\Database\Seeder;

class RepliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('replies')->insert([
            'id' => 1,
            'user_id' => 2,
            'comment_id' => 1,
            'body' => "I Agree",
        ]);

        DB::table('replies')->insert([
            'id' => 2,
            'user_id' => 2,
            'comment_id' => 1,
            'body' => "Yes",
        ]);
    }
}
