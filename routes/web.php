<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ThxController;
use App\Http\Controllers\WarrantyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/* FRONTEND */

Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/gwarancja', [WarrantyController::class, 'index'])->name('front.warranty');
Route::get('/honeycomb', [CollectionController::class, 'honeycomb'])->name('front.collection.honeycomb');
Route::get('/structure', [CollectionController::class, 'structure'])->name('front.collection.structure');
Route::get('/inspire', [CollectionController::class, 'inspire'])->name('front.collection.inspire');
Route::get('/retro', [CollectionController::class, 'retro'])->name('front.collection.retro');
Route::get('/geo-steel', [CollectionController::class, 'geoSteel'])->name('front.collection.geo-steel');
Route::get('/buckingham', [CollectionController::class, 'buckingham'])->name('front.collection.buckingham');
Route::get('/precision-control', [CollectionController::class, 'precisionControl'])->name('front.collection.precision-control');
Route::get('/colours-plus', [CollectionController::class, 'coloursPlus'])->name('front.collection.colours-plus');
Route::get('/textures-plus', [CollectionController::class, 'texturesPlus'])->name('front.collection.textures-plus');
Route::get('/power-steam-ultra', [CollectionController::class, 'powerSteamUltra'])->name('front.collection.power-steam-ultra');
Route::get('/steam-genie', [CollectionController::class, 'steamGenie'])->name('front.collection.steam-genie');
Route::get('/cooper-express-pro', [CollectionController::class, 'cooperExpressPro'])->name('front.collection.cooper-express-pro');
Route::get('/cooper-express', [CollectionController::class, 'cooperExpress'])->name('front.collection.cooper-express');
Route::get('/impact', [CollectionController::class, 'Impact'])->name('front.collection.impact');
Route::get('/colour-control-supreme', [CollectionController::class, 'colourControlSupreme'])->name('front.collection.colour-control-supreme');
Route::get('/quiet-super-steam', [CollectionController::class, 'quietSuperSteam'])->name('front.collection.quiet-super-steam');
Route::get('/one-temperature', [CollectionController::class, 'oneTemperature'])->name('front.collection.one-temperature');
Route::get('/pearl-glide', [CollectionController::class, 'pearlGlide'])->name('front.collection.pearl-glide');
Route::get('/mikser-reczny-swirl', [CollectionController::class, 'mikserRecznySwirl'])->name('front.collection.mikser-reczny-swirl');
Route::get('/opiekacz-deep-fill-3w1-fiesta', [CollectionController::class, 'opiekaczDeepFill'])->name('front.collection.opiekacz-deep-fill');
Route::get('/parowar-cyfrowy-maxicook', [CollectionController::class, 'parowarCyfrowyMaxicook'])->name('front.collection.parowar-cyfrowy-maxicook');
Route::get('/ryzowar-cook-home', [CollectionController::class, 'ryzowarCookHome'])->name('front.collection.ryzowar-cook-home');
Route::get('/zestaw-do-raclette-fiesta', [CollectionController::class, 'zestawDoRaclette'])->name('front.collection.zestaw-do-raclette-fiesta');
Route::get('/wyciskarka-do-cytrusow', [CollectionController::class, 'wyciskarkaDoCytrusow'])->name('front.collection.wyciskarka-do-cytrusow');
Route::get('/frytownica-cyclofry-plus', [CollectionController::class, 'frytownicaCyclofryPlus'])->name('front.collection.frytownica-cyclofry-plus');
Route::get('/blender-kielichowy-sensigence', [CollectionController::class, 'blenderKielichowySensigence'])->name('front.collection.blender-kielichowy-sensigence');
Route::get('/blender-reczny-desire', [CollectionController::class, 'blenderRecznyDesire'])->name('front.collection.blender-reczny-desire');
Route::post('/kontakt/wyslij', [ContactController::class, 'send'])->name('front.contact.send');
Route::get('/formularz', [ApplicationController::class, 'form'])->name('front.application.form');
Route::post('/formularz/zapisz', [ApplicationController::class, 'store'])->name('front.application.save');
Route::get('/formularz/podziekowania', [ThxController::class, 'form'])->name('front.thx.form');

/* BACKEND */

Route::middleware(['auth', 'verified', 'jwt.access'])->group(function () {
    Route::get('/panel', [\App\Http\Controllers\Panel\HomeController::class, 'index'])->name('back.home');

    Route::middleware(['can:isAdmin'])->group(function () {
        Route::get('/panel/zgloszenie', [\App\Http\Controllers\Panel\ApplicationController::class, 'index'])->name('back.application');
        Route::get('/panel/zgloszenie/{application}', [\App\Http\Controllers\Panel\ApplicationController::class, 'show'])->name('back.application.show');

        Route::get('/panel/kolekcja', [\App\Http\Controllers\Panel\CollectionController::class, 'index'])->name('back.collection');
        Route::get('/panel/kolekcja/{collection}', [\App\Http\Controllers\Panel\CollectionController::class, 'show'])->name('back.collection.show');

        Route::get('/panel/produkt', [\App\Http\Controllers\Panel\ProductController::class, 'index'])->name('back.product');
        Route::get('/panel/produkt/{product}', [\App\Http\Controllers\Panel\ProductController::class, 'show'])->name('back.product.show');

        Route::get('/panel/link', [\App\Http\Controllers\Panel\LinkController::class, 'index'])->name('back.link');
        Route::get('/panel/link/dodaj', [\App\Http\Controllers\Panel\LinkController::class, 'create'])->name('back.link.create');
        Route::get('/panel/link/zmien/{link}', [\App\Http\Controllers\Panel\LinkController::class, 'edit'])->name('back.link.edit');
        Route::get('/panel/link/{link}', [\App\Http\Controllers\Panel\LinkController::class, 'show'])->name('back.link.show');

        Route::get('/panel/opinie', [\App\Http\Controllers\Panel\ReviewController::class, 'index'])->name('back.review');
        Route::get('/panel/opinie/dodaj', [\App\Http\Controllers\Panel\ReviewController::class, 'create'])->name('back.review.create');
        Route::get('/panel/opinie/zmien/{review}', [\App\Http\Controllers\Panel\ReviewController::class, 'edit'])->name('back.review.edit');
        Route::get('/panel/opinie/{review}', [\App\Http\Controllers\Panel\ReviewController::class, 'show'])->name('back.review.show');
    });
});
