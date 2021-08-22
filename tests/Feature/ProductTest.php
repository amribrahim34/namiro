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
    // use RefreshDatabase ;


    public function DbPreparation(){
       return  [
            'category' => factory(Category::class)->create() , 
            'subcategory' => factory(Subcategory::class)->create() , 
            'color' => factory(Color::class)->create() , 
            'size' => factory(Size::class)->create() , 
            'material' => factory(Material::class)->create() ,
            'product' => factory(Product::class)->create() ,
        ];
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
    public function adminProductCreate()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create(['admin' =>1]);
        $this->DbPreparation();
        $response = $this->actingAs($user)->get(route('admin.products.product.create'));
        $response->assertStatus(200);
    }

    

    /** @test */
    public function productStore()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create(['admin' =>1]);
        $data = $this->DbPreparation();
        $response = $this->actingAs($user)->post(route('admin.products.product.store'),[
            'name' =>'test',
            'discription' =>'test test',
            'price' => 1 ,
            'subcategory_id' => $data['subcategory']->id,
            'group'=>[0=>[
                'quantity' => 1,
                'size_id' => $data['size']->id,
                'color_id' => $data['color']->id,
                'material_id' => $data['material']->id,
            ]]
        ]);
        $response->assertStatus(302);
    }

    /** @test */
    public function adminProductEdit()
    {
        $this->withoutExceptionHandling();
        $data = $this->DbPreparation();
        $user = factory(User::class)->create(['admin' =>1]);
        $response = $this->actingAs($user)->get(route('admin.products.product.edit',$data['product']->id));
        $response->assertStatus(200);
    }

     /** @test */
     public function adminProductUpdate()
     {
         $this->withoutExceptionHandling();
         $data = $this->DbPreparation();
         $user = factory(User::class)->create(['admin' =>1]);
         $response = $this->actingAs($user)->put(route('admin.products.product.update'
            ,$data['product']->id
            ,[
                'name' =>'test',
                'discription' =>'test test',
                'price' => 1 ,
                'subcategory_id' => $data['subcategory']->id,
                'group'=>[0=>[
                    'quantity' => 1,
                    'size_id' => $data['size']->id,
                    'color_id' => $data['color']->id,
                    'material_id' => $data['material']->id,
                ]]
            ]
        ));
         $response->assertStatus(302);
     }

     /** @test */
    public function adminProductDelete()
    {
        $this->withoutExceptionHandling();
        $data = $this->DbPreparation();
        $user = factory(User::class)->create(['admin' =>1]);
        $response = $this->actingAs($user)->delete(route('admin.products.product.destroy',$data['product']->id));
        $response->assertStatus(302);
    }
}
