<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show($id)
    {
        return "Mostrar datos del producto con $id";
    }
}
