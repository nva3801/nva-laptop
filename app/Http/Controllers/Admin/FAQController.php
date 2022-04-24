<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\FAQ;
use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class FAQController extends Controller
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
        $faq = FAQ::get();
        return view('admincp.faq.index', [
            'faq' => $faq,
        ]);
    }

    public function create()
    {
        return view('admincp.faq.create');
    }

    public function store(StoreFAQRequest $request)
    {
        FAQ::create($request->validated());
        return redirect()->route('admin.faq.index');
    }

    public function show(FAQ $fAQ)
    {
        //
    }

    public function edit(FAQ $faq)
    {
        return view('admincp.faq.edit', [
            'faq' => $faq,
        ]);
    }

    public function update(UpdateFAQRequest $request, FAQ $faq)
    {
        $faq->fill($request->validated());
        $faq->save();
        return redirect()->route('admin.faq.index');
    }

    public function destroy(FAQ $faq)
    {
        $faq->delete();
        return redirect()->route('admin.faq.index');
    }
}