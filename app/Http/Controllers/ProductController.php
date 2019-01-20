<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use http\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
       // dd($products);
        return view('shop.index',['products'=>$products]);
    }
    public function addToCart(Request $request,$id)
    {
        $product=Product::find($id);
      //  dd($product);
        $oldcart=Session::has('cart')? Session::get('cart'):null;
        $cart=new Cart($oldcart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
       // dd($request->session()->get('cart'));
        return redirect('/');
    }
    public function shoppingCart()
    {
        if(!Session::has('cart'))
        {
            return view('shop.shoppingcart');
        }
        else{

            $oldcart=session()->get('cart');
            $cart=new Cart($oldcart);
           // dd($cart);
            return view('shop.shoppingcart',['products'=>$cart->items,'totalprice'=>$cart->totalPrice]);
        }
    }
}
