<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Models\Specifications\Color;
use App\Models\Specifications\Size;
use App\Models\Specifications\Material;
use App\Models\Products\Category;
use App\Models\Products\Subcategory;
use App\Models\Products\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase ;


    public function DbPreparation(){
        factory(Category::class)->create();
        factory(Subcategory::class)->create();
        factory(Color::class)->create();
        factory(Size::class)->create();
        factory(Material::class)->create();
    }

    /** @test */
    public function userProductIndex()
    {
        $this->withoutExceptionHandling();
        $response = $this->get(route('products.product.index'));
        $response->assertStatus(200);
    }

    /** @test */
    public function adminProductIndex()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create(['admin' =>1]);
        $response = $this->actingAs($user)->get(route('admin.products.product.index'));
        $response->assertStatus(200);
    }

    /** @test */
    public function productStore()
    {
        $this->withoutExceptionHandling();
        // $user = User::where('admin',1)->get()->first();
        $user = factory(User::class)->create(['admin' =>1]);
        $this->DbPreparation();
        $response = $this->actingAs($user)->post(route('admin.products.product.store'),[
            'name' =>'test',
            'discription' =>'test test',
            'price' => 1 ,
            'subcategory_id' => 1,
            'group'=>[0=>[
                'quantity' => 1,
                'size_id' => 1,
                'color_id' => 1,
                'material_id' => 1,
            ]]
        ]);
        $response->assertStatus(302);
    }
}
