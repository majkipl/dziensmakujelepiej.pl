<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Link;
use App\Models\Review;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function honeycomb()
    {
        $slug = 'honeycomb';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/honeycomb', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function structure()
    {
        $slug = 'structure';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/structure', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function inspire()
    {
        $slug = 'inspire';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/inspire', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function retro()
    {
        $slug = 'retro';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/retro', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function geoSteel()
    {
        $slug = 'geo-steel';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/geo-steel', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function buckingham()
    {
        $slug = 'buckingham';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/buckingham', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function precisionControl()
    {
        $slug = 'precision-control';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/precision-control', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function coloursPlus()
    {
        $slug = 'colours-plus';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/colours-plus', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function texturesPlus()
    {
        $slug = 'textures-plus';
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', $slug))->get();

        return view('collection/textures-plus', [
            'reviews' => $reviews,
            'slug' => $slug,
        ]);
    }

    public function powerSteamUltra()
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

    public function steamGenie()
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

    public function cooperExpressPro()
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

    public function cooperExpress()
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

    public function impact()
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

    public function colourControlSupreme()
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

    public function quietSuperSteam()
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

    public function oneTemperature()
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

    public function pearlGlide()
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

    public function mikserRecznySwirl()
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

    public function opiekaczDeepFill()
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

    public function parowarCyfrowyMaxicook()
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

    public function ryzowarCookHome()
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

    public function zestawDoRaclette()
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

    public function wyciskarkaDoCytrusow()
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

    public function frytownicaCyclofryPlus()
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

    public function blenderKielichowySensigence()
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

    public function blenderRecznyDesire()
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
