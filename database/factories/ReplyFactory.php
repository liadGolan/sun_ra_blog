<?php

use Faker\Generator as Faker;

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'id' => 1,
        'comment_id' => 1,
        'user_id' => 1,
        'body' => 'www',
        'created_at' => null,
        'updated_at' => null
    ];
});