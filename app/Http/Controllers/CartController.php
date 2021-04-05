<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function addToCart($id)
    {
        $product = Product::find($id);
        $oldCart = session()->get('cart');
        $newCart = new Cart($oldCart);
        $newCart->addProduct($product);
        session()->put('cart', $newCart);
        return back();
    }

    function index()
    {
        $cart = session()->get('cart');
        return view('products.cart', compact('cart'));
    }

    function removeProduct($id)
    {
        $oldCart = session()->get('cart');
        $newCart = new Cart($oldCart);
        $newCart->deleteProduct($id);
        session()->put('cart', $newCart);
        return back();
    }

    function updateCart(Request $request)
    {

        foreach ($request->quantity_product as $key => $value) {
            $oldCart = session()->get('cart');
            $newCart = new Cart($oldCart);
            $newCart->updateCart($key, $value);
            session()->put('cart', $newCart);
        }

        return back();
    }

    function deleteCart()
    {
        session()->forget('cart');
        return redirect('/products');
    }
}
