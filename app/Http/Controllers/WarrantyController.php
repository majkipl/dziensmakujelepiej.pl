<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class WarrantyController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('warranty/index');
    }
}
