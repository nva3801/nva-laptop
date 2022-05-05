<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ProductSlider;
use App\Http\Requests\StoreProductSliderRequest;
use App\Http\Requests\UpdateProductSliderRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ProductSliderController extends Controller
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
        $product_slider = ProductSlider::get();
        return view('admincp.product_slide.index', [
            'product_slider' => $product_slider,
        ]);
    }

    public function create()
    {
        $product = Product::where('status', 'Yes')->get();
        return view('admincp.product_slide.create', [
            'product' => $product,
        ]);
    }

    public function store(StoreProductSliderRequest $request)
    {
        $path = Storage::disk('public')->put('product_slider', $request->file('image'));
        $arr = $request->validated();
        $arr['image'] = $path;
        ProductSlider::create($arr);
        return redirect()->route('admin.productslider.index');
    }

    public function show(ProductSlider $productslider)
    {
        //
    }

    public function edit(ProductSlider $productslider)
    {
        $product = Product::where('status', 'Yes')->get();
        return view('admincp.product_slide.edit', [
            'productslider' => $productslider,
            'product' => $product,
        ]);
    }

    public function update(UpdateProductSliderRequest $request, ProductSlider $productslider)
    {
        if ($request->hasFile('image')) {
            $path = Storage::disk('public')->put('product_slider', $request->file('image'));
            $arr = $productslider->fill($request->validated());
            $arr['image'] = $path;
        } else {
            $productslider->fill($request->validated());
        }
        $productslider->save();
        return redirect()->route('admin.productslider.index');
    }

    public function destroy(ProductSlider $productslider)
    {
        $productslider->delete();
        return redirect()->route('admin.productslider.index');
    }
}