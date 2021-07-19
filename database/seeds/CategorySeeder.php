<?php

use Illuminate\Database\Seeder;
use App\Models\Products\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ["title"=>"men"],
            ["title"=>"women"],
        ]);
    }
}
