<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => 1,
            'user_id' => 1,
            'title' => "Sun Ra is Great",
            'body' => "I love Sun Ra so much, he is the best space jazz musician",
        ]);

        DB::table('posts')->insert([
            'id' => 2,
            'user_id' => 1,
            'title' => "Madlib is Awesome",
            'body' => "Has anyone noticed how much Madlib is influenced by Sun Ra? I think its really cool to see how much influence Sun Ra has.",
        ]);

    }
}
