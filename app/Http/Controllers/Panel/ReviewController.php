<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return view('panel/review/index');
    }

    public function create()
    {
        $collections = Collection::all();

        return view('panel/review/form', [
            'collections' => $collections
        ]);
    }

    public function show(Review $review)
    {
        return view('panel/review/show', [
            'review' => $review
        ]);
    }

    public function edit(Review $review)
    {
        $collections = Collection::all();

        return view('panel/review/form', [
            'review' => $review,
            'collections' => $collections
        ]);
    }
}
