<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;
use App\Models\Products\Category;
use App\Models\Products\Subcategory;
use App\Models\Specifications\Color;
use App\Models\Specifications\Size;
use App\Models\Calculations\Stock;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::get();
    }

    public function search(Request $request)
    {
        $products = Product::with('stocks');
        if ($request->category) {
            $subcategories = $this->get_subcategory_that_has_category($request->category);
            $products = $products->BySubcategory($subcategories);
        }
        if ($request->color) {
            $stock_ids = $this->get_stocks_by_relation('color', $request->size);
            $products = $products->ByStock($stock_ids);
        }

        if ($request->size) {
            $stock_ids = $this->get_stocks_by_relation('size', $request->size);
            $products = $products->ByStock($stock_ids);
        }

        if ($request->price) {
            $range = $request->price;
            $products = $products->ByPriceRange($range);
        }
        return  $products->paginate(9);
    }

    private function get_subcategory_that_has_category($id_array)
    {
        return Subcategory::whereHas('category', function ($query) use ($id_array) {
            $query->whereIn('id', $id_array);
        })->pluck('id');
    }

    private function get_stocks_by_relation($relation, $ids)
    {
        return Stock::whereHas($relation, function ($query) use ($ids) {
            $query->whereIn('id', $ids);
        })->get()->pluck('id');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
