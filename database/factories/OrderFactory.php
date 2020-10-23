<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'ID' => $faker->randomNumber(4),
        'CustomerID' => $faker->randomNumber(4),
        'OrderDate' => $faker->time(),
        'RequiredDate' => $faker->time(),
        'ShippedDate' => $faker->time(),
        'Status' => $faker->randomNumber(4),
        'Comments' => $faker->word
    ];
});
