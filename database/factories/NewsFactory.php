<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => $faker->sentence($faker->numberBetween(3,6)),
        'content' => $faker->text(),
    ];
});
