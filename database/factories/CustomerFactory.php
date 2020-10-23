<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'ID' => $faker->randomNumber(4),
        'salesRepEmployeeNum' => $faker->randomNumber(4),
        'Name' => $faker->word,
        'LastName' => $faker->word,
        'FirstName' => $faker->word,
        'Phone' => $faker->word,
        'Address1' => $faker->word,
        'Address2' => $faker->word,
        'State' => $faker->word,
        'City' => $faker->word,
        'PostalCode' => $faker->word,
        'Country' => $faker->randomNumber(4),
        'Creditlimit' => $faker->randomNumber(1)
    ];
});
