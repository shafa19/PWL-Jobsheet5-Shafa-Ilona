<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'author' => $faker->sentence(),
        'year' => $faker->unique()->numberBetween(2000, 2020)
    ];
});
