<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        $category = Category::where('status', 'Yes')->get();
        $slider = Slider::where('status', 'Yes')->get();
        return view('user.index', [
            'category' => $category,
            'danhmuc' => $category,
            'footer' => $category,
            'slider' => $slider,
        ]);
    }
}