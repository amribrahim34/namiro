<?php

use Illuminate\Database\Seeder;
use App\Models\Products\Category;
use App\Models\Products\Subcategory;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $men = Category::where('title','men')->get()->first()->id;
        $women = Category::where('title','women')->get()->first()->id;
        Subcategory::insert([
            [
                "title"=>"T-shirt",
                "category_id"=>$men,
            ],
            [
                "title"=>"pants",
                "category_id"=>$men,
            ],
            [
                "title"=>"dress",
                "category_id"=>$women,
            ],
            [
                "title"=>"perfume",
                "category_id"=>$women,
            ],
        ]);
    }
}
