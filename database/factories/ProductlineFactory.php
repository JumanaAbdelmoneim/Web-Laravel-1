<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Productline::class, function (Faker $faker) {
    return [
        'ID' => $faker->randomNumber(4),
        'DesclnText' => $faker->word,
        'DesclnHTML' => $faker->word,
        'Image' => $faker->word
    ];
});
