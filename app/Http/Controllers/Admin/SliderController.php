<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class SliderController extends Controller
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
        $slider = Slider::get();
        return view('admincp.slider.index', [
            'slider' => $slider,
        ]);
    }

    public function create()
    {
        return view('admincp.slider.create');
    }

    public function store(StoreSliderRequest $request)
    {
        $path1 = Storage::disk('public')->put('slider', $request->file('image_pc'));
        $path2 = Storage::disk('public')->put('slider', $request->file('image_mobile'));
        $arr = $request->validated();
        $arr['image_pc'] = $path1;
        $arr['image_mobile'] = $path2;
        Slider::create($arr);
        return redirect()->route('admin.slider.index');
    }


    public function show(Slider $slider)
    {
        //
    }


    public function edit(Slider $slider)
    {
        return view('admincp.slider.edit', [
            'slider' => $slider,
        ]);
    }


    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        if ($request->hasFile('image')) {
            $path1 = Storage::disk('public')->put('slider', $request->file('image_pc'));
            $path2 = Storage::disk('public')->put('slider', $request->file('image_pc'));
            $arr = $slider->fill($request->validated());
            $arr['image_pc'] = $path1;
            $arr['image_mobile'] = $path2;
        } else {
            $slider->fill($request->validated());
        }
        $slider->save();
        return redirect()->route('admin.slider.index');
    }


    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('admin.slider.index');
    }
}