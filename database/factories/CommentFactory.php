<?php

use Faker\Generator as Faker;
use App\User;
use App\Comment;
use App\Post;

$factory->define(Comment::class, function (Faker $faker) {
    $data = [
        'user_id' => User::inRandomOrder()->value('id'),
        'post_id' => Post::inRandomOrder()->value('id'),
        'comment' => $faker->realText(),
        'status' => Comment::ACTIVE
    ];
    dump($data['comment']);
    return $data;
});
