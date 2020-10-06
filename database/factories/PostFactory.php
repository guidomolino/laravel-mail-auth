<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title'   => $faker -> word(),
      'topic'   => $faker -> sentence($nbWords = 4, $variableNbWords = true),
      'content' => $faker -> text($maxNbChars = 200),
      'views'   => $faker -> numberBetween($min = 1, $max = 9000)
    ];
});
