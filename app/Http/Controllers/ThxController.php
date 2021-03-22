<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ThxController extends Controller
{
    /**
     * @return View
     */
    public function form(): View
    {
        return view('thx/form');
    }
}
