<?php

use Illuminate\Database\Seeder;
use App\Models\Specifications\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::insert([
            ["title"=>"small"],
            ["title"=>"meduim"],
            ["title"=>"larg"],
        ]);
    }
}
