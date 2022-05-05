<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;

class SearchController extends Controller
{
    public function search()
    {
        $data = Product::search()->get();
        return $data;
    }
}