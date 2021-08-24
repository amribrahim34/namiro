<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Category;
use App\Models\Products\Product;
use App\Models\Specifications\Color;
use App\Models\Specifications\Size;


class FilterController extends Controller
{
    public function CategoryFilter(Category $category){
        // dd($category);
        $sub_cat_ids = $category->subcategories->pluck('id');
        $products = Product::whereIn('subcategory_id',$sub_cat_ids)
        ->with('stocks')->paginate(9);
        return $this->get_product_view_and_variables($products);
        
    }

    public function ColorFilter(Color $color){
        $stock_ids = $color->stocks->pluck('id');
        $products = Product::whereHas('stocks',function($query)
        use($stock_ids)
        {
            $query->whereIn('id',$stock_ids );
        })->with('stocks')->paginate(9);
        return $this->get_product_view_and_variables($products);
    }

    public function SizeFilter(Size $size){
        $stock_ids = $size->stocks->pluck('id');
        $products = Product::whereHas('stocks',function($query)
        use($stock_ids)
        {
            $query->whereIn('id',$stock_ids );
        })->with('stocks')->paginate(9);
        return $this->get_product_view_and_variables($products);
    }

    private function get_product_view_and_variables ($products){
        $colors = Color::get();
        $sizes = Size::get();
        $categories = Category::with('subcategories','products')->get();
        $related_products = Product::inRandomOrder()->paginate(4);
        return view('products.index',[
            'products'=>$products,
            'categories'=>$categories,
            'colors'=>$colors,
            'sizes'=>$sizes,
            'related_products'=>$related_products,
            ]);; 
    }
}
