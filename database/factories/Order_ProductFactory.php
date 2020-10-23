<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order_Product::class, function (Faker $faker) {
    return [
        'ID' => $faker->randomNumber(4),
        'OrderID' => $faker->randomNumber(4),
        'ProductCode' => $faker->randomNumber(4),
        'Qty' => $faker->randomNumber(4),
        'PriceEach' => $faker->randomNumber(4)
    ];
});
