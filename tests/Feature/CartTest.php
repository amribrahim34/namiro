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
use App\Models\Calculations\Stock;
use App\Models\Processes\Cart;



class CartTest extends TestCase
{
    // use RefreshDatabase;

    public function DbPreparation(){
        return  [
             'category' => factory(Category::class)->create() , 
             'subcategory' => factory(Subcategory::class)->create() , 
             'color' => factory(Color::class)->create() , 
             'size' => factory(Size::class)->create() , 
             'material' => factory(Material::class)->create() ,
             'product' => factory(Product::class)->create() ,
             'stock' => factory(Stock::class)->create() ,
             'cart' => factory(Cart::class)->create() ,
         ];
    } 
    
    /** @test */
    public function userCartIndex()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)->get(route('processes.carts.index'));
        $response->assertStatus(200);
    }

    /** @test */
    public function userCartStore()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $data = $this->DbPreparation();
        $product_id = $data['product']->id;
        $data['stock']->update(['product_id'=>$product_id]);
        $response = $this->actingAs($user)->post(route('processes.carts.store',
            [
                'product_id'=>$data['product']->id,
                'quantity'=>1,
            ]
        ));
        $response->assertStatus(302);
    }

    /** @test */
    public function userCartUpdate()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $data = $this->DbPreparation();
        $product_id = $data['product']->id;
        $stock_id = $data['stock']->id;
        $data['stock']->update(['product_id'=>$product_id]);
        $data['cart']->update(['stock_id'=>$stock_id]);
        $response = $this->actingAs($user)->post(route('processes.carts.update',$data['cart']->id,
            [
                'data'=> [
                    [
                        'cart_id' => $data['stock']->id,
                        'quantity' => 1,
                    ],[
                        'cart_id' => $data['stock']->id,
                        'quantity' => 1,
                    ],
                ]
            ]
        ));
        $response->assertStatus(302);
    }
}
