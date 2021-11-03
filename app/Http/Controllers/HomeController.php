<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $best_seller = Product::with('stocks')->inRandomOrder()->take(6)->get();
        $new_arrivals = Product::with('stocks')->orderBy('id','DESC')->take(6)->get();
        return view('home',[
            'new_arrivals'=>$new_arrivals,
            'best_seller'=>$best_seller,
        ]);
    }

    public function welcome()
    {
        $products = Product::with('stocks')->inRandomOrder()->take(8)->get();
        return view('welcome',[
            'products'=>$products,
        ]);
    }
}
