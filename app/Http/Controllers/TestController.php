<?php

namespace App\Http\Controllers;
use App\Product;

class TestController extends Controller
{
    //
    public function welcome()
    {
        $products=Product::all();
        return view('welcome')->with(compact('products'));


    }
}
