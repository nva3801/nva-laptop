<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Category;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class CheckoutController extends Controller
{
    public function checkoutget()
    {
        $category = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $cart = session()->get('cart');
        return view('user.checkout', [
            'category' => $category,
            'cart' => $cart,
            'footer' => $category,
        ]);
    }
    public function checkoutpost(Request $request)
    {
        $category = Category::where('status', 'Yes')->get();
        $data = $request->all();
        $cart = session()->get('cart');
        try {
            $user = User::find($data['id']);
            $bill = new Bill;
            $bill->user_id = $user->id;
            $bill->phoneNumber = $user->phoneNumber;
            $bill->email = $user->email;
            $bill->name = $user->name;
            $bill->address = $user->address;
            $bill->received = 0;
            $bill->save();
            if (count($cart) > 0) {
                foreach ($cart as $key => $cart) {
                    $billDetail = new BillDetail;
                    $billDetail->bill_id = $bill->id;
                    $billDetail->product_id = $cart['product_id'];
                    $billDetail->quantity = $cart['quantity'];
                    $billDetail->price = $cart['price_new'];
                    $billDetail->total = $cart['price_new'] * $cart['quantity'];
                    $billDetail->save();
                    $bill->total += $cart['price_new'] * $cart['quantity'];
                    $bill->save();
                }
            }

            session()->pull('cart');
            return view('user.checkout', [
                'category' => $category,
                'footer' => $category,
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}