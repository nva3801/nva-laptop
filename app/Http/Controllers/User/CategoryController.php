<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryDetail;
use App\Models\FAQ;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($slug)
    {
        $category = Category::where('status', 'Yes')->get();
        $category_slug = Category::where('slug', $slug)->first();
        $category_detail = CategoryDetail::where('category_id', $category_slug->id)->get();
        $category_detail_slug = CategoryDetail::where('category_id', $category_slug->id)->first();
        $products = Product::join('category_details', 'category_details.id', '=', 'products.category_id')
            ->join('categories', 'categories.id', '=', 'category_details.category_id')
            ->where('categories.id', '=', $category_slug->id)
            ->select('products.name', 'products.image', 'products.price_new', 'products.price_old', 'products.slug')
            ->paginate(4);
        $faq = FAQ::where('status', 'Yes')->get();
        $news = News::where('like', 1)->where('status', 'Yes')->limit(1)->get();
        $news_like = News::where('like', 0)->where('status', 'Yes')->limit(2)->get();
        return view('user.category', [
            'category' => $category,
            'category_slug' => $category_slug,
            'category_detail' => $category_detail,
            'category_detail_slug' => $category_detail_slug,
            'products' => $products,
            'faq' => $faq,
            'footer' => $category,
            'news' => $news,
            'news_like' => $news_like,
        ]);
    }
}