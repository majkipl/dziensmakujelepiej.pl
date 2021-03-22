<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Review;
use Illuminate\Contracts\View\View;

class ReviewController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('panel/review/index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $collections = Collection::all();

        return view('panel/review/form', [
            'collections' => $collections
        ]);
    }

    /**
     * @param Review $review
     * @return View
     */
    public function show(Review $review): View
    {
        return view('panel/review/show', [
            'review' => $review
        ]);
    }

    /**
     * @param Review $review
     * @return View
     */
    public function edit(Review $review): View
    {
        $collections = Collection::all();

        return view('panel/review/form', [
            'review' => $review,
            'collections' => $collections
        ]);
    }
}
