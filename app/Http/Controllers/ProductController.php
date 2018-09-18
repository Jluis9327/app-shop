<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products=Product::paginate(10);
        return view('admin.products.index')->with(compact('products'));
    }
    public function create()
    {
        return view('admin.products.create');
    }
    public function store(Request $request)
    {
        //dd($request->all());//dd permite imprimir lo que pasa el argumento y realiza la operacion
        $product=new Product();
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save();//realiza el insert
        return redirect('/admin/products');
    }
    public function edit($id)
    {
        //return "Mostrar aqui el form de edicion para el producto con id $id";
        $product=Product::find($id);
        return view('admin.products.edit')->with(compact('product'));
    }
    public function update(Request $request,$id)
    {
        //dd($request->all());//dd permite imprimir lo que pasa el argumento y realiza la operacion
        $product=Product::find($id);
        $product->name=$request->input('name');
        $product->description=$request->input('description');
        $product->price=$request->input('price');
        $product->long_description=$request->input('long_description');
        $product->save();//Update es lo que realizara
        return redirect('/admin/products');
    }
}
