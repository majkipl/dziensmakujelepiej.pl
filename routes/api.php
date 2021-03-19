<?php

use App\Http\Controllers\Api\ApplicationController;
use App\Http\Controllers\Api\CollectionController;
use App\Http\Controllers\Api\LinkController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/collection/{slug}/links', [CollectionController::class, 'links'])->name('api.collection.links');

Route::middleware(['api.keys'])->group(function () {
    Route::middleware(['api.auth'])->group(function () {
        Route::get('/applications', [ApplicationController::class, 'index'])->name('api.application');
        Route::get('/collections', [CollectionController::class, 'index'])->name('api.collection');
        Route::get('/products', [ProductController::class, 'index'])->name('api.product');

        Route::get('/reviews', [ReviewController::class, 'index'])->name('api.review');
        Route::post('/reviews', [ReviewController::class, 'add'])->name('api.review.add');
        Route::put('/reviews', [ReviewController::class, 'update'])->name('api.review.update');
        Route::delete('/reviews/{review}', [ReviewController::class, 'delete'])->name('api.review.delete');

        Route::get('/links', [LinkController::class, 'index'])->name('api.link');
        Route::post('/links', [LinkController::class, 'add'])->name('api.link.add');
        Route::put('/links', [LinkController::class, 'update'])->name('api.link.update');
        Route::delete('/links/{link}', [LinkController::class, 'delete'])->name('api.link.delete');
    });
});
