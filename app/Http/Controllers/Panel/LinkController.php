<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class LinkController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('panel/link/index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $products = Product::all()->map(function ($product){
            $product['name'] = $product['code'];
            return $product;
        });

        return view('panel/link/form', [
            'products' => $products
        ]);
    }

    /**
     * @param Link $link
     * @return View
     */
    public function show(Link $link): View
    {
        return view('panel/link/show', [
            'link' => $link
        ]);
    }

    /**
     * @param Link $link
     * @return View
     */
    public function edit(Link $link): View
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
