<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('product',['products'=>$products]);
    }
    
    function detail($id)
    {
        $product = Product::find($id);
        return view('details',['product'=>$product]);
    }

    function search(Request $request)
    {
        $data = Product::where('name','like','%'.$request->input('search').'%')->get();
        return view('search',['data'=>$data]);
    }
}
