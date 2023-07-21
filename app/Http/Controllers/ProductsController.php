<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function  getProducts(){
        $products = Product::get();
        return view('products',['allproducts'=>$products]);
    }

    public function insertProduct(Request $request){
        $products = new Product();
        $products->fill($request->all());
        $products->save();
        return redirect('/products');
    }

    public function deleteProduct(Request $request){
        $products = Product::find($request->id);
        $products->delete();
        return redirect('/products');
    }

    public function getProductData(Request $request){
        $products = Product::find($request->id);
        return view('products_update',['title'=>$products->title,'price'=>$products->price,'id'=>$products->id]);
    }

    public function updateProductData(Request $request,$id){
        $products = Product::find($request->id);
        $products->fill($request->all());
        $products->save();
        return redirect('products');
    }
}
