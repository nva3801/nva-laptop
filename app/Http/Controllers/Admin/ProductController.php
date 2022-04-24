<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\CategoryDetail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
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
        $product = Product::get();
        return view('admincp.product.index', [
            'product' => $product,
        ]);
    }

    public function create()
    {
        $category_detail = CategoryDetail::where('status', 'Yes')->get();
        return view('admincp.product.create', [
            'category_detail' => $category_detail,
        ]);
    }

    public function store(StoreProductRequest $request)
    {
        $path = Storage::disk('public')->put('product', $request->file('image'));
        $arr = $request->validated();
        $arr['image'] = $path;
        Product::create($arr);
        return redirect()->route('admin.product.index');
    }

    public function show(Product $product)
    {
        $category_detail = CategoryDetail::where('status', 'Yes')->get();
        return view('admincp.product.edit', [
            'category_detail' => $category_detail,
        ]);
    }

    public function edit(Product $product)
    {
        $category_detail = CategoryDetail::where('status', 'Yes')->get();
        return view('admincp.product.edit', [
            'category_detail' => $category_detail,
            'product' => $product,
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('product', $request->file('image'));
            $arr = $product->fill($request->validated());
            $arr['image'] = $path;
        } else {
            $product->fill($request->validated());
        }
        $product->save();
        return redirect()->route('admin.product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index');
    }
}