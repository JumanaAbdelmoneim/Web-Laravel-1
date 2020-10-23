<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'ID' => $faker->randomNumber(4),
        'OfficeCode' => $faker->randomNumber(4),
        'reportsTo' => $faker->randomNumber(4),
        'LastName' => $faker->word,
        'FirstName' => $faker->word,
        'Extension' => $faker->word,
        'Email' => $faker->word,
        'JobTitle' => $faker->word
    ];
});
