<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Internship;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Internship::class, function (Faker $faker) {
    return [
        'student_id' => App\Student::first()->id,
        'begins_at' => Carbon::now()->addDays(15)->format('d/m/Y'),
        'ends_at' => Carbon::now()->addWeeks(10)->format('d/m/Y'),
        'country' => 'NO',
        'company' => 'Entreprise test'
    ];
});
