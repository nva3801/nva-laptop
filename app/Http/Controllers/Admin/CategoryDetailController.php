<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\CategoryDetail;
use App\Http\Requests\StoreCategoryDetailRequest;
use App\Http\Requests\UpdateCategoryDetailRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class CategoryDetailController extends Controller
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
        $category_detail = CategoryDetail::get();
        return view('admincp.category_detail.index', [
            'category_detail' => $category_detail,
        ]);
    }

    public function create()
    {
        $category = Category::where('status', 'Yes')->get();
        return view('admincp.category_detail.create', [
            'category' => $category,
        ]);
    }

    public function store(StoreCategoryDetailRequest $request)
    {
        $path = Storage::disk('public')->put('category_detail', $request->file('image'));
        $arr = $request->validated();
        $arr['image'] = $path;
        CategoryDetail::create($arr);
        return redirect()->route('admin.categorydetail.index');
    }

    public function show(CategoryDetail $categoryDetail)
    {
        //
    }

    public function edit(CategoryDetail $categorydetail)
    {
        $category = Category::where('status', 'Yes')->get();
        return view('admincp.category_detail.edit', [
            'categorydetail' => $categorydetail,
            'category' => $category,
        ]);
    }


    public function update(UpdateCategoryDetailRequest $request, CategoryDetail $categorydetail)
    {
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('category_detail', $request->file('image'));
            $arr = $categorydetail->fill($request->validated());
            $arr['image'] = $path;
        } else {
            $categorydetail->fill($request->validated());
        }
        $categorydetail->save();
        return redirect()->route('admin.categorydetail.index');
    }

    public function destroy(CategoryDetail $categorydetail)
    {
        $categorydetail->delete();
        return redirect()->route('admin.categorydetail.index');
    }
}