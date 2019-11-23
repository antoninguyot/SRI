<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transfer;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Transfer::class, function (Faker $faker) {
    return [
        'payee' => 'Antonin Guyot',
        'purpose' => 'Virement de test',
        'amount' => 120,
        'date' => Carbon::now()->format('d/m/Y'),
    ];
});
