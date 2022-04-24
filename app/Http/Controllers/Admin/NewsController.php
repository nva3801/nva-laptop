<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\News;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class NewsController extends Controller
{
    public function __construct()
    {
        $routeName = Route::currentRouteName();
        $arr = explode('.', $routeName);
        $arr = array_map('ucfirst', $arr);
        $title = implode(' - ', $arr);
        View::share('title', $title);
    }
    public function index()
    {
        $news = News::get();
        return view('admincp.news.index', [
            'news' => $news,
        ]);
    }


    public function create()
    {
        $user_id = User::where('is_admin', 1)->get();
        return view('admincp.news.create', [
            'user_id' => $user_id,
        ]);
    }

    public function store(StoreNewsRequest $request)
    {
        $path = Storage::disk('public')->put('news', $request->file('image'));
        $arr = $request->validated();
        $arr['image'] = $path;
        News::create($arr);
        return redirect()->route('admin.news.index');
    }

    public function show(News $news)
    {
        //
    }

    public function edit(News $news)
    {
        //
    }

    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    public function destroy(News $news)
    {
        //
    }
}