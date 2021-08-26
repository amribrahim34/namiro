<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products\Subcategory;
use App\Models\Products\Category;
use Faker\Generator as Faker;

$factory->define(Subcategory::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'category_id' => Category::all()->random()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
