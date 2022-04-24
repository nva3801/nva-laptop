<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\BillDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BillController extends Controller
{
    public function __construct()
    {
        $title = 'Bill';
        View::share('title', $title);
    }
    public function index()
    {
        $bill = Bill::get();
        return view('admincp.bill.index', [
            'bill' => $bill,
        ]);
    }
    public function show($id)
    {
        $bill_detail = BillDetail::where('bill_id', $id)->get();
        $bill_name = BillDetail::where('bill_id', $id)->first();
        return view('admincp.bill.show', [
            'bill_detail' => $bill_detail,
            'bill_name' => $bill_name,
        ]);
    }
}