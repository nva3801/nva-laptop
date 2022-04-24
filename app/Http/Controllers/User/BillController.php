<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    public function cartlist()
    {
        $user = Auth::id();
        $category = Category::where('status', 'Yes')->get();
        $bill = Bill::where('user_id', $user)->get();
        return view('user.cartshow', [
            'user' => $user,
            'category' => $category,
            'bill' => $bill,
            'footer' => $category,
        ]);
    }
    public function cartshow($id)
    {
        $category = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $bill = Bill::where('id', $id)->first();
        $user = User::where('id', $bill->user_id)->first();
        $user_id = Auth::id();
        $bill_list = BillDetail::join('bills', 'bills.id', '=', 'bill_details.bill_id')->where('bill_id', $id)->where('user_id', $user_id)->get();
        return view('user.cartshow_item', [
            'user' => $user,
            'category' => $category,
            'bill' => $bill,
            'bill_list' => $bill_list,
            'footer' => $category,
        ]);
    }
    public function received($id)
    {
        $bill = Bill::find($id);
        $bill->received = 1;
        $bill->save();
        return back();
    }
}