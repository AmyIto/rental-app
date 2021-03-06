<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application cart.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Show the application checkout.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkout()
    {
        return view('cart.checkout');
    }
}
