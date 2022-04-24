<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product($slug)
    {
        $category = Category::where('status', 'Yes')->get();
        $product_list = Product::where('slug', $slug)->get();
        $product = Product::where('slug', $slug)->first();
        $category_detail_slug = CategoryDetail::where('id', $product->category_id)->first();
        $category_slug = Category::where('id', $category_detail_slug->category_id)->first();
        return view('user.product', [
            'category' => $category,
            'product' => $product,
            'product_list' => $product_list,
            'category_detail_slug' => $category_detail_slug,
            'category_slug' => $category_slug,
            'footer' => $category,
        ]);
    }
}