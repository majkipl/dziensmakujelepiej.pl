<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('panel/product/index');
    }

    /**
     * @param Product $product
     * @return View
     */
    public function show(Product $product): View
    {
        return view('panel/product/show', [
            'product' => $product
        ]);
    }
}
