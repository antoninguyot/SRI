<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'first_name' => 'Yiming',
        'last_name' => 'Song',
        'email' => 'songyiming1998@gmail.com',
        'nationality' => 'CN',
    ];
});
