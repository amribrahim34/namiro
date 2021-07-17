<?php

use Illuminate\Database\Seeder;
use App\Models\Specifications\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::insert([
            ["title"=>"red"],
            ["title"=>"green"],
            ["title"=>"blue"],
        ]);
        
    }
}
