<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Specifications\Size;
use Faker\Generator as Faker;

$factory->define(Size::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
