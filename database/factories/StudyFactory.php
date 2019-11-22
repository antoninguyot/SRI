<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Study;
use Faker\Generator as Faker;

$factory->define(Study::class, function (Faker $faker) {
    return [
        'name' => 'Formation de test',
        'ects' => 10,
        'duration' => 120,
        'university' => config('app.university'),
        'country' => 'FR',

    ];
});
