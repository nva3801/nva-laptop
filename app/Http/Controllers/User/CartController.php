<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddToCart($id)
    {
        // session()->flush('cart');
        $product = Product::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'price_old' => $product->price_old,
                'price_new' => $product->price_new,
                'quantity' => 1,
            ];
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success',
        ], 200);
    }
    public function incrementCart(Request $request, $id)
    {
        $cart = $request->session()->get('cart');
        if (isset($cart)) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success',
        ], 200);
    }
    public function decrementCart(Request $request, $id)
    {
        $cart = $request->session()->get('cart');
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] - 1;
        }
        if ($cart[$id]['quantity'] === 0) {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success',
        ], 200);
    }
    public function DeleteCart(Request $request, $id)
    {
        $cart = $request->session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success',
        ], 200);
    }
    public function showCart()
    {
        // print_r(session()->get('cart'));
        $category = Category::where('status', 'Yes')->get();
        $cart = session()->get('cart');
        return view('user.cart', [
            'category' => $category,
            'carts' => $cart,
            'footer' => $category,
        ]);
    }
    
}