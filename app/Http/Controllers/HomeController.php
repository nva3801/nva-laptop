<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $routeName = Route::currentRouteName();
        $arr = explode('.', $routeName);
        $arr = array_map('ucfirst', $arr);
        $title = implode(' - ', $arr);
        View::share('title', $title);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('homepage');
    }
    public function adminView()
    {
        $count_bill = Bill::count();
        $sum_bill = Bill::sum('total');
        $sum_ship = Bill::where('received', 0)->count();
        return view('adminview', [
            'count_bill' => $count_bill,
            'sum_bill' => $sum_bill,
            'sum_ship' => $sum_ship,
        ]);
    }
}