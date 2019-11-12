<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exchange;
use Faker\Generator as Faker;

$factory->define(Exchange::class, function (Faker $faker) {
    return [
        'study_id' => factory(App\Study::class)->create()->id,
        'student_id' => factory(App\Student::class)->create()->id,
        'begins_at' => $faker->date('d/m/Y'),
        'ends_at' => $faker->date('d/m/Y'),
    ];
});
