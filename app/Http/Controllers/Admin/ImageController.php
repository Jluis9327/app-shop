<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;
use File;
class ImageController extends Controller
{
    //
    public function Index($id)
    {
        $product=Product::find($id);
        $images=$product->images()->orderBy('featured','desc')->get();
        return view('admin.products.images.index')->with(compact('product','images'));
    }
    public function store(Request $request,$id)
    {
        //guardar la imagene en nuestro proyeco es decir el archivo
        $file=$request->file('photo');
        $path=public_path().'/images/products';
        $fileName=uniqid().$file->getClientOriginalName();
        $moved=$file->move($path,$fileName);
        // crear 1 registro en la table product_images
        if($moved) {
            $productImage = new ProductImage();
            $productImage->image = $fileName;
            //$productImage->featured=false;
            $productImage->product_id = $id;
            $productImage->save();
        }
        return back();
    }
    public function destroy(Request $request,$id)
    {
        //elimiar el archivo
        $productImage=ProductImage::find($request->input('image_id'));
        if(substr($productImage->image,0,4)==="http"){
            //$fullPath=public_path().'/images/products/'.$productImage->image;
            //$deleted=File::delete($fullPath);
            $deleted=true;
        }else{
            $fullPath=public_path().'/images/products/'.$productImage->image;
            $deleted=File::delete($fullPath);
        }
        //eliinar el reistro de la img en la bd
        if($deleted)
        {
            $productImage->delete();
        }
        return back();

    }
    public function select($id,$image)
    {
        ProductImage::where('product_id',$id)->update(['featured'=>false]);
        $productImage=ProductImage::find($image);
        $productImage->featured=true;
        $productImage->save();
        //return back();
        return redirect('admin/products/'.$id.'/images');
    }
}
