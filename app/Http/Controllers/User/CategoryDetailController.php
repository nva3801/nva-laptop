<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryDetail;
use App\Models\FAQ;
use App\Models\News;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class CategoryDetailController extends Controller
{
    public function category_detail($slug)
    {
        $category = Category::where('status', 'Yes')->get();
        $category_detail_slug = CategoryDetail::where('slug', $slug)->first();
        $category_list = Category::where('id', $category_detail_slug->category_id)->first();
        $category_detail_list = CategoryDetail::where('category_id', $category_detail_slug->category_id)->get();
        $products = Product::where('category_id', $category_detail_slug->id)->paginate(8);
        $faq = FAQ::where('status', 'Yes')->get();
        $news = News::where('like', 1)->where('status', 'Yes')->limit(1)->get();
        $news_like = News::where('like', 0)->where('status', 'Yes')->limit(2)->get();
        $slider = Slider::where('status', 'Yes')->get();
        return view('user.category_detail', [
            'category' => $category,
            'category_detail_slug' => $category_detail_slug,
            'category_list' => $category_list,
            'category_detail_list' => $category_detail_list,
            'products' => $products,
            'faq' => $faq,
            'footer' => $category,
            'news' => $news,
            'news_like' => $news_like,
            'slider' => $slider,
        ]);
    }
}