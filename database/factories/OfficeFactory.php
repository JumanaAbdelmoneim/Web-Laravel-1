<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Office::class, function (Faker $faker) {
    return [
        'Code' => $faker->randomNumber(4),
        'City' => $faker->word,
        'Phone' => $faker->word,
        'Address1' => $faker->word,
        'Address2' => $faker->word,
        'State' => $faker->word,
        'Country' => $faker->word,
        'PostalCode' => $faker->randomNumber(4),
        'Territory' => $faker->word
    ];
});
