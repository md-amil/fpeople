<?php

use Faker\Generator as Faker;
use App\Post;
use App\User;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->value('id'),
        'title' => $faker->sentence(),
        'excerpt' => $faker->sentence(),
        'post' => $faker->realText(),
        'status' => Post::ACTIVE
    ];
});
