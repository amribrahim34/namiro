<?php 
namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function getdata (Request $request){
      $products = Product::with('stocks');
      if ($request->category) {
          $succategories = $this->get_subcategory_that_has_category_in_the_id_array($request->category);
          $products = $products->BySubcategory($succategories);
      }
      if ($request->color) {
        $stock_ids = $this->get_stocks_by_relation('color' ,$request->size);
        $products = $products->ByStock($stock_ids);
      }

      if ($request->size) {
        $stock_ids = $this->get_stocks_by_relation('size' ,$request->size);
        $products = $products->ByStock($stock_ids);
      }

      if ($request->price) {
        $range = explode(';' , $request->price);
        $products = $products->ByPriceRange($range);
      }
      return  $products->paginate(9);
    } 

    private function get_subcategory_that_has_category_in_the_id_array($id_array){
      return Subcategory::whereHas('category',function($query)use($id_array){
          $query->whereIn('id',$id_array);
      })->pluck('id');
    }

    private function get_stocks_by_relation($relation , $ids){
      return Stock::whereHas($relation , function($query)use($ids){
        $query->whereIn('id' , $ids);
      })->get()->pluck('id');
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