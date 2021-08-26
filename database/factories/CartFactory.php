<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Processes\Cart;
use App\Models\Calculations\Stock;
use App\User;
use Faker\Generator as Faker;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'user_id'=> User::all()->random()->id,
        'stock_id'=> Stock::all()->random()->id,
        'quantity'=> 1,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
