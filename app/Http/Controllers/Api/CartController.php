<?php

namespace App\Http\Controllers\API;

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
    public function getCarts()
    {
        $carts = Cart::with('stock', 'stock.product', 'stock.color', 'stock.material', 'stock.size')->where('user_id', Auth::id())->get();
        return $carts;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function storeCarts(Request $request)
    {
        $product = Product::find($request->product_id);
        // dd($product);
        $prev_cart = Cart::whereIn('stock_id', $product->stocks->pluck('id'))->first();
        if ($prev_cart  == null) {
            $this->storeNewCart($request);
        } else {
            if ($request->quantity) {
                $prev_cart->update(['quantity' => $request->quantity]);
            } else {
                $prev_cart->update(['quantity' => 1]);
            }
        }
        return response("created successfully");
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
        dd($request->data);
        $total = 0;
        foreach ($data as $cart) {
            $modified_cart = Cart::find($cart['id']);
            $modified_cart->update(['quantity' => $cart['quantity']]);
            $total += $modified_cart->quantity * $modified_cart->stock->product->price;
        }
        return  json_encode(['total' => $total]);
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
        if (isset($cart) && $cart->user->id == Auth::user()->id) {
            $cart->forceDelete();
            return response("deleted successfully");
        }
        return response(abort(403, 'Unauthorized action.'));
    }

    private function storeNewCart($request)
    {
        $stock = $this->getProductStock($request);
        $cart = new Cart;
        $cart->stock_id = $stock->id;
        if ($request->quantity) {
            $cart->quantity = $request->quantity;
        } else {
            $cart->quantity = 1;
        }
        $cart->user_id = Auth::id();
        $cart->save();
    }

    private function getProductStock($request)
    {
        $stock = Stock::where('product_id', $request->product_id);
        if ($request->color_id) {
            $stock = $stock->where('color_id', $request->color_id);
        }
        if ($request->size_id) {
            $stock = $stock->where('size_id', $request->size_id);
        }
        return $stock->get()->first();
    }
}
