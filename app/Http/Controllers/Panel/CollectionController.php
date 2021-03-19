<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
        return view('panel/collection/index');
    }

    public function show(Collection $collection)
    {
        return view('panel/collection/show', [
            'collection' => $collection
        ]);
    }
}
