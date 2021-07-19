<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Products\Product;
use Faker\Generator as Faker;
use App\Models\Products\Subcategory;

$factory->define(App\Models\Products\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'price' => $faker->numberBetween($min = 100, $max = 500),
        'subcategory_id' => Subcategory::all()->random()->id,
        'discription' => $faker->paragraph,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
