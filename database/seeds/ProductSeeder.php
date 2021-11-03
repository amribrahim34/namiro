<?php

use Illuminate\Database\Seeder;
use App\Models\Products\Product;
use App\Models\Calculations\Stock;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Products\Product::class, 1000)->create();
        factory(Product::class, 500)->create()->each(function ($product) {
            $product->stocks()->save(factory(Stock::class)->make());
        });
    }
}
