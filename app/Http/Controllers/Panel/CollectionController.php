<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('panel/collection/index');
    }

    /**
     * @param Collection $collection
     * @return View
     */
    public function show(Collection $collection): View
    {
        return view('panel/collection/show', [
            'collection' => $collection
        ]);
    }
}
