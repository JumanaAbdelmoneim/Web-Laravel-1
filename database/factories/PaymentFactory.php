<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
        'CheckNum' => $faker->word,
        'CustomerID' => $faker->randomNumber(4),
        'PaymentDate' => $faker->time(),
        'Amount' => $faker->randomNumber(4)
    ];
});
