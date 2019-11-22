<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mission;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Mission::class, function (Faker $faker) {
    return [
        'location' => 'Togo',
        'first_name' => 'Antonin',
        'last_name' => 'Guyot',
        'purpose' => 'Visite de test',
        'cost' => 120,
        'begins_at' => Carbon::now()->addDays(15)->format('d/m/Y'),
        'ends_at' => Carbon::now()->addWeeks(10)->format('d/m/Y'),
    ];
});
