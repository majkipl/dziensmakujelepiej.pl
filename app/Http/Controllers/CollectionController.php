<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Review;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function honeycomb()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'honeycomb'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'honeycomb'))->get();

        return view('collection/honeycomb', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function structure()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'structure'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'structure'))->get();

        return view('collection/structure', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function inspire()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'inspire'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'inspire'))->get();

        return view('collection/inspire', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function retro()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'retro'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'retro'))->get();

        return view('collection/retro', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function geoSteel()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'geo-steel'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'geo-steel'))->get();

        return view('collection/geo-steel', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function buckingham()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'buckingham'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'buckingham'))->get();

        return view('collection/buckingham', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function precisionControl()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'precision-control'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'precision-control'))->get();

        return view('collection/precision-control', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function coloursPlus()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'colours-plus'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'colours-plus'))->get();

        return view('collection/colours-plus', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function texturesPlus()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'textures-plus'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'textures-plus'))->get();

        return view('collection/textures-plus', [
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function powerSteamUltra()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'power-steam-ultra'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'power-steam-ultra'))->get();

        return view('collection/power-steam-ultra', [
            'product' => 'psu',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function steamGenie()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'steam-genie'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'steam-genie'))->get();

        return view('collection/steam-genie', [
            'product' => 'sg',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function cooperExpressPro()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'cooper-express-pro'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'cooper-express-pro'))->get();

        return view('collection/cooper-express-pro', [
            'product' => 'cep',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function cooperExpress()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'cooper-express'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'cooper-express'))->get();

        return view('collection/cooper-express', [
            'product' => 'ce',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function impact()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'impact'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'impact'))->get();

        return view('collection/impact', [
            'product' => 'i',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function colourControlSupreme()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'colour-control-supreme'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'colour-control-supreme'))->get();

        return view('collection/colour-control-supreme', [
            'product' => 'ccs',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function quietSuperSteam()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'quiet-super-steam'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'quiet-super-steam'))->get();

        return view('collection/quiet-super-steam', [
            'product' => 'qss',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function oneTemperature()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'one-temperature'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'one-temperature'))->get();

        return view('collection/one-temperature', [
            'product' => 'ot',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function pearlGlide()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'pearl-glide'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'pearl-glide'))->get();

        return view('collection/pearl-glide', [
            'product' => 'pg',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function mikserRecznySwirl()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'mikser-reczny-swirl'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'mikser-reczny-swirl'))->get();

        return view('collection/mikser-reczny-swirl', [
            'product' => 'mrs',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function opiekaczDeepFill()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'opiekacz-deep-fill-3w1-fiesta'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'opiekacz-deep-fill-3w1-fiesta'))->get();

        return view('collection/opiekacz-deep-fill-3w1-fiesta', [
            'product' => 'odf',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function parowarCyfrowyMaxicook()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'parowar-cyfrowy-maxicook'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'parowar-cyfrowy-maxicook'))->get();

        return view('collection/parowar-cyfrowy-maxicook', [
            'product' => 'pcm',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function ryzowarCookHome()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'ryzowar-cook-home'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'ryzowar-cook-home'))->get();

        return view('collection/ryzowar-cook-home', [
            'product' => 'rch',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function zestawDoRaclette()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'zestaw-do-raclette-fiesta'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'zestaw-do-raclette-fiesta'))->get();

        return view('collection/zestaw-do-raclette-fiesta', [
            'product' => 'zdr',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function wyciskarkaDoCytrusow()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'wyciskarka-do-cytrusow'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'wyciskarka-do-cytrusow'))->get();

        return view('collection/wyciskarka-do-cytrusow', [
            'product' => 'wdc',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function frytownicaCyclofryPlus()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'frytownica-cyclofry-plus'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'frytownica-cyclofry-plus'))->get();

        return view('collection/frytownica-cyclofry-plus', [
            'product' => 'fcp',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function blenderKielichowySensigence()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'blender-kielichowy-sensigence'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'blender-kielichowy-sensigence'))->get();

        return view('collection/blender-kielichowy-sensigence', [
            'product' => 'bks',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }

    public function blenderRecznyDesire()
    {
        $reviews = Review::withWhereHas('collection', fn($query) => $query->where('slug', 'blender-reczny-desire'))->get();
        $links = Link::withWhereHas('collection', fn($query) => $query->where('slug', 'blender-reczny-desire'))->get();

        return view('collection/blender-reczny-desire', [
            'product' => 'brd',
            'reviews' => $reviews,
            'links' => $links
        ]);
    }
}
