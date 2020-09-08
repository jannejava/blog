<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entry;
use Faker\Generator as Faker;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence(),
        'text' => $faker->sentences(),
    ];
});

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence,
        'text' => $faker->paragraph,
    ];
});
