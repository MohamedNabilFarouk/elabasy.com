<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as MyCart;
use App\Models\Cart;
use App\Models\stock;
use Illuminate\Support\Facades\Session;


class cartController extends Controller
{
    public function store(Request $request) {
        //   Session::flush();
        $product =Product::where('id','=',$request->id)->first();
        $cart = '';
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }


        $cart->add($product);

        //dd($cart);
        session()->put('cart', $cart);
        return response()->json($cart);
    }

    public function delete_product (Product $product) {

        $cart = Session::get('cart');
        
        // dd($cart);
        $item = $cart->items[$product->id];
// dd($item['qty']);
        $cart->totalQty -= $item['qty'];
        $cart->totalPrice -= $item['price'] * $item['qty'];
        // dd($cart->items[$product->id]);
        unset($cart->items[$product->id]);
        //  $cart->items = array_splice($cart->items,$product->id,1);
// dd($cart->items);



        Session::put('cart',$cart);

        return redirect()->back();
    }


}
