<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news_list()
    {
        $category = Category::where('status', 'Yes')->get();
        $news = News::where('status', 'Yes')->get();
        return view('user.news_list', [
            'category' => $category,
            'news' => $news,
            'footer' => $category,
        ]);
    }
    public function news($id)
    {
        $category = Category::where('status', 'Yes')->get();
        $news = News::where('id', $id)->get();
        return view('user.news', [
            'category' => $category,
            'news' => $news,
            'footer' => $category,
        ]);
    }
}