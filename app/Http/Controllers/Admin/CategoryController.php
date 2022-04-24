<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class CategoryController extends Controller
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
        $category = Category::get();
        return view('admincp.category.index', [
            'category' => $category,
        ]);
    }

    public function create()
    {
        return view('admincp.category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $path = Storage::disk('public')->put('category', $request->file('image'));
        $arr = $request->validated();
        $arr['image'] = $path;
        Category::create($arr);
        return redirect()->route('admin.category.index');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('admincp.category.edit', [
            'category' => $category,
        ]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('category', $request->file('image'));
            $arr = $category->fill($request->validated());
            $arr['image'] = $path;
        } else {
            $category->fill($request->validated());
        }
        $category->save();
        return redirect()->route('admin.category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}