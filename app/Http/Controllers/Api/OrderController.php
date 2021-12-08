<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Processes\Order;
use App\Models\Processes\Cart;
use App\Models\Calculations\Stock;
use App\Models\Products\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\Address;

class OrderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getOrders()
    {
        $orders = Order::with('carts.stock.product')->where('user_id', Auth::id())->get();
        return $orders->toJson();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // dd($request->except(['_token']));
        $order = new Order;
        $carts = Cart::where('user_id', Auth::id())->doesntHave('order')->update(['order_id' => $order->id]);
        $data = $request->except(['_token', 'email']);
        $data['user_id'] = Auth::id();
        Address::updateOrCreate($data);
        return redirect(route('products.product.index'));
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
