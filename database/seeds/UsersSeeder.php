<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'email' => 'hello@gmail.com',
            'name' => 'Hello',
            'password' => bcrypt('hello')
        ]);
    }
}
