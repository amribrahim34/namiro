<?php 
namespace App\Http\Controllers\Processes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Processes\Cart;
use App\Models\Calculations\Stock;
use App\Models\Products\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;


class CartController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $carts = Cart::with('stock','stock.product','stock.color','stock.material','stock.size')->where('user_id',Auth::id())->get();
        return view('processes.cart.index',['carts'=>$carts]);
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
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        // dd($product);
        $prev_cart = Cart::whereIn('stock_id' , $product->stocks->pluck('id'))->first();
        if ( $prev_cart  == null) {
            $stock = Stock::where('product_id' ,$request->product_id);
            if ($request->color_id) {
                $stock = $stock->where('color_id' ,$request->color_id);
            }
            if ($request->size_id) {
                $stock = $stock->where('size_id' ,$request->size_id);
            }
            $stock = $stock->get()->first();  
            $cart = new Cart;
            $cart->stock_id = $stock->id;
            if ($request->quantity) {
                $cart->quantity = $request->quantity;
            }else{
                $cart->quantity = 1;
            }
            $cart->user_id = Auth::id();
            $cart->save();
        }else {
            if ($request->quantity) {
                $prev_cart->update(['quantity'=>$request->quantity]);
            }else{
                $prev_cart->update(['quantity'=>1]);
            }
        }
        return redirect(route('processes.carts.index'));
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
    public function update(Request $request)
    {
        $data = $request->data;
        foreach ($data as $cart) {
            $modified_cart = Cart::find($cart['id']);
            $modified_cart->update(['quantity' => $cart['quantity']]);
        }
        return 'updated successfully ';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      $cart = Cart::find($id);
      $cart->delete();
    }
  
}