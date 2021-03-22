<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Review;
use Illuminate\Contracts\View\View;

class CollectionController extends Controller
{
    public function honeycomb(): View
    {
        $slug = 'honeycomb';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/honeycomb', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function structure(): View
    {
        $slug = 'structure';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/structure', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function inspire(): View
    {
        $slug = 'inspire';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/inspire', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function retro(): View
    {
        $slug = 'retro';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/retro', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function geoSteel(): View
    {
        $slug = 'geo-steel';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/geo-steel', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function buckingham(): View
    {
        $slug = 'buckingham';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/buckingham', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function precisionControl(): View
    {
        $slug = 'precision-control';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/precision-control', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function coloursPlus(): View
    {
        $slug = 'colours-plus';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/colours-plus', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function texturesPlus(): View
    {
        $slug = 'textures-plus';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/textures-plus', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function powerSteamUltra(): View
    {
        $slug = 'power-steam-ultra';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/power-steam-ultra', [
            'product' => 'psu',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function steamGenie(): View
    {
        $slug = 'steam-genie';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/steam-genie', [
            'product' => 'sg',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function cooperExpressPro(): View
    {
        $slug = 'cooper-express-pro';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/cooper-express-pro', [
            'product' => 'cep',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function cooperExpress(): View
    {
        $slug = 'cooper-express';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/cooper-express', [
            'product' => 'ce',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function impact(): View
    {
        $slug = 'impact';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/impact', [
            'product' => 'i',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function colourControlSupreme(): View
    {
        $slug = 'colour-control-supreme';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/colour-control-supreme', [
            'product' => 'ccs',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function quietSuperSteam(): View
    {
        $slug = 'quiet-super-steam';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/quiet-super-steam', [
            'product' => 'qss',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function oneTemperature(): View
    {
        $slug = 'one-temperature';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/one-temperature', [
            'product' => 'ot',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function pearlGlide(): View
    {
        $slug = 'pearl-glide';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', function ($query) {
            $query->where('slug', 'pearl-glide');
        })->get();

        return view('collection/pearl-glide', [
            'product' => 'pg',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function mikserRecznySwirl(): View
    {
        $slug = 'mikser-reczny-swirl';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/mikser-reczny-swirl', [
            'product' => 'mrs',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function opiekaczDeepFill(): View
    {
        $slug = 'opiekacz-deep-fill-3w1-fiesta';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/opiekacz-deep-fill-3w1-fiesta', [
            'product' => 'odf',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function parowarCyfrowyMaxicook(): View
    {
        $slug = 'parowar-cyfrowy-maxicook';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/parowar-cyfrowy-maxicook', [
            'product' => 'pcm',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function ryzowarCookHome(): View
    {
        $slug = 'ryzowar-cook-home';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/ryzowar-cook-home', [
            'product' => 'rch',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function zestawDoRaclette(): View
    {
        $slug = 'zestaw-do-raclette-fiesta';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/zestaw-do-raclette-fiesta', [
            'product' => 'zdr',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function wyciskarkaDoCytrusow(): View
    {
        $slug = 'wyciskarka-do-cytrusow';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/wyciskarka-do-cytrusow', [
            'product' => 'wdc',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function frytownicaCyclofryPlus(): View
    {
        $slug = 'frytownica-cyclofry-plus';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/frytownica-cyclofry-plus', [
            'product' => 'fcp',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function blenderKielichowySensigence(): View
    {
        $slug = 'blender-kielichowy-sensigence';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/blender-kielichowy-sensigence', [
            'product' => 'bks',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }

    public function blenderRecznyDesire(): View
    {
        $slug = 'blender-reczny-desire';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/blender-reczny-desire', [
            'product' => 'brd',
            'reviews' => $reviews,
            'slug' => $slug,
            'links' => $links
        ]);
    }
}
