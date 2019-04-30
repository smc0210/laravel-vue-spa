<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id'  => function () {
            return factory(App\User::class)->create()->id;
        },
        'title'  => $faker->sentence,
        'body'   => $faker->sentence,
    ];
});
