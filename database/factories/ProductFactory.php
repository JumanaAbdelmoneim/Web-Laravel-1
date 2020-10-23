<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'Code' => $faker->randomNumber(4),
        'ProductlineID' => $faker->randomNumber(4),
        'Name' => $faker->word,
        'Scale' => $faker->randomNumber(4),
        'vendor' => $faker->word,
        'PdtDescription' => $faker->word,
        'QtyinStock' => $faker->randomNumber(4),
        'BuyPrice' => $faker->randomNumber(4),
        'MSRP' => $faker->randomNumber(4)
    ];
});
