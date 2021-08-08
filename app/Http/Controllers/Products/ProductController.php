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
      $products = Product::paginate(9);
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
        $product = Product::findOrFail($id);
        $relatedproducts = Product::where('subcategory_id' , $product->subcategory_id)->paginate(6);
        return  view('products.show',[
          'product'=>$product,
          'relatedproducts'=>$relatedproducts,
        ]);
    }

 
    public function search(Request $request)
    {
      $products = Product::paginate(9);
      if ($request->search_term) {
          $search_term = $request->search_term;
          $products = Product::where('name' , 'LIKE' , "%$search_term%" )->orWhere('discription' , 'LIKE' , "%$search_term%" )->paginate(9);
      }
      // dd($products);
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