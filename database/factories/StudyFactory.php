<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Study;
use Faker\Generator as Faker;

$factory->define(Study::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'ects' => $faker->numberBetween(5,15),
        'duration' => $faker->numberBetween(50,150),
        'university' => $faker->company,
        'country' => $faker->randomElement([$faker->countryCode, config('app.university')]),

    ];
});
