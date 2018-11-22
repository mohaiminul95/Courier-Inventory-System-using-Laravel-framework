<?php

use Faker\Generator as Faker;

$factory->define(App\order::class, function (Faker $faker) {
    return [
        'agent_id' => $faker->unique()->numberBetween($min = 1, $max = 50),
        'parcel_desc' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'weight' => $faker->numberBetween($min = 1000, $max = 5000),
        'order_date' => $faker->date,
        'booking_amount' => $faker->numberBetween($min = 500, $max = 10000),
        'is_processed' => $faker->randomElement(['yes','no']),
    ];
});
