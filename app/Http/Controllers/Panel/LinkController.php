<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Link;
use App\Models\Product;
use App\Models\Review;

class LinkController extends Controller
{
    public function index()
    {
        return view('panel/link/index');
    }

    public function create()
    {
        $products = Product::all()->map(function ($product){
            $product['name'] = $product['code'];
            return $product;
        });

        return view('panel/link/form', [
            'products' => $products
        ]);
    }

    public function show(Link $link)
    {
        return view('panel/link/show', [
            'link' => $link
        ]);
    }

    public function edit(Link $link)
    {
        $products = Product::all()->map(function ($product){
            $product['name'] = $product['code'];
            return $product;
        });

        return view('panel/link/form', [
            'link' => $link,
            'products' => $products
        ]);
    }
}
