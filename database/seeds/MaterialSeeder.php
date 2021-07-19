<?php

use Illuminate\Database\Seeder;
use App\Models\Specifications\Material;


class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::insert([
            ["title"=>"fur"],
            ["title"=>"wool"],
            ["title"=>"silk"],
        ]);
    }
}
