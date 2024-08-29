<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function tampil() {
        $product = Product::get();
        return view('product.tampil', compact('product'));
    }

    function tambah() {
        return view('product.tambah');
    }
    function submit(Request $request) {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->Category = $request->Category;
        $product->Price = $request->Price;
        $product->discount = $request->discount;
        $product->save();
        
        return redirect()->route('product.tampil');
    }
    function edit($id){
        $product = Product::find($id);
        return view('product.edit', compact('product'));
        
    }
    function update(Request $request, $id) {
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->Category = $request->Category;
        $product->Price = $request->Price;
        $product->discount = $request->discount;
        $product->update();
        
        return redirect()->route('product.tampil');
    }
    function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.tampil');
        
    }
}
