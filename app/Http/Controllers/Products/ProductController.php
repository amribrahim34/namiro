<?php 
namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Models\Products\Category;
use App\Models\Specifications\Color;
use App\Models\Specifications\Size;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $products = Product::paginate(6);
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
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      
    }
  
}