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
    public function index(Request $request)
    {
      $products = Product::paginate(9);
      $colors = Color::get();
      $sizes = Size::get();
      $categories = Category::with('subcategories','products')->get();
      $related_products = Product::inRandomOrder()->paginate(4);
      if ($request->search == true) {
        $products = $this->check_for_parameters_and_get_products($request);
      }
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

    private function check_for_parameters_and_get_products ($request){
      if ($request->category) {
          return $this->CategoryFilter($request->category);
      }

      if ($request->color) {
        return $this->ColorFilter($request->color);
      }

      if ($request->size) {
        return $this->SizeFilter($request->size);
      }

      if ($request->price) {
        return $this->PriceFilter($request->price);
      }
    } 

    private function CategoryFilter( $id){
      $category = Category::FindOrFail($id);
      $sub_cat_ids = $category->subcategories->pluck('id');
      return Product::BySubcategory($sub_cat_ids)
      ->with('stocks')->paginate(9);
    }
    
    public function ColorFilter($id){
      $color = Color::FindOrFail($id);
      $stock_ids = $color->stocks->pluck('id');
      return Product::ByStock($stock_ids)->with('stocks')->paginate(9);
    }

    public function SizeFilter($id){
      $size = Size::FindOrFail($id);
      $stock_ids = $size->stocks->pluck('id');
      return Product::ByStock($stock_ids)->with('stocks')->paginate(9);
    }

    public function PriceFilter($price){
      $range = explode(';' , $price);
      return Product::ByPriceRange($range)->with('stocks')->paginate(9);
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