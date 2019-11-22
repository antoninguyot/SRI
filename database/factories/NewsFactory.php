<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => 'News de test',
        'content' => 'Ceci est simplement une news d\'exemple, elle ne sert pas à grand chose...',
    ];
});
