<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'id' => 1,
        'user_id' => 1,
        'title' => 'Wow',
        'body' => 'www',
    ];
});