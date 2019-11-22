<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'designation' => 'Commande test',
        'supplier' => 'Auchan',
        'quantity' => 2,
        'value' => 10.99,
        'date' => Carbon::now()->format('d/m/Y'),
    ];
});
