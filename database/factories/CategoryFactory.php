<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
