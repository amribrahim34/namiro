<?php 
namespace App\Http\Controllers\Admin\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\Product;
use App\Models\Products\Category;
use App\Models\Products\Subcategory;
use App\Models\Specifications\Color;
use App\Models\Specifications\Material;
use App\Models\Specifications\Size;
use App\Models\Calculations\Stock;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.products.product.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::get();
        $subcategories = Subcategory::get();
        $colors = Color::get();
        $materials = Material::get();
        $sizes = Size::get();
        return view('admin.products.product.create',[
            'categories'=>$categories,
            'subcategories'=>$subcategories,
            'colors'=>$colors,
            'materials'=>$materials,
            'sizes'=>$sizes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // dd($request);
      $request->validate([
        'name' =>'required',
        'discription' =>'required',
        'price' =>'required',
        'quantity' =>'required',
        'size_id' =>'required',
        'color_id' =>'required',
        'material_id' =>'required',
      ]);
    //   dd($request);
      $product = new Product;
      $product->name = $request->name;
      $product->subcategory_id = $request->subcategory_id;
      $product->discription = $request->discription;
      $product->price = $request->price;
      $product->color_id = $request->color_id;
      $product->material_id = $request->material_id;
      $product->save();
      $stock = new Stock;
      $stock->amount = $request->quantity;
      $stock->product_id = $product->id;
      $stock->save();
      $product->sizes()->sync([$request->size_id]);
      return redirect(route('admin.products.product.index'));
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