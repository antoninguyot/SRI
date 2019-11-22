<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Semester;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Semester::class, function (Faker $faker) {
    return [
        'student_id' => App\Student::first()->id,
        'study_id' => factory(App\Study::class)->create()->id,
        'begins_at' => Carbon::now()->addDays(15)->format('d/m/Y'),
        'ends_at' => Carbon::now()->addWeeks(10)->format('d/m/Y'),
    ];
});
