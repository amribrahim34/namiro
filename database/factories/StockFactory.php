<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Calculations\Stock;
use Faker\Generator as Faker;
use App\Models\Specifications\Size;
use App\Models\Specifications\Color;
use App\Models\Specifications\Material;

$factory->define(Stock::class, function (Faker $faker) {
    return [
        'amount' => $faker->numberBetween($min = 2, $max = 50),
        'color_id' => Color::all()->random()->id,
        'size_id' => Size::all()->random()->id,
        'material_id' => Material::all()->random()->id,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
