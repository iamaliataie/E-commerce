<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

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

    function addToCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect("/");
        }
        else
        {
            return redirect('login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
