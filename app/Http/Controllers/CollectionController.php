<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function honeycomb()
    {
        return view('collection/honeycomb');
    }

    public function structure()
    {
        return view('collection/structure');
    }

    public function inspire()
    {
        return view('collection/inspire');
    }

    public function retro()
    {
        return view('collection/retro');
    }

    public function geoSteel()
    {
        return view('collection/geo-steel');
    }

    public function buckingham()
    {
        return view('collection/buckingham');
    }

    public function precisionControl()
    {
        return view('collection/precision-control');
    }

    public function coloursPlus()
    {
        return view('collection/colours-plus');
    }

    public function texturesPlus()
    {
        return view('collection/textures-plus');
    }

    public function powerSteamUltra()
    {
        return view('collection/power-steam-ultra', [
            'product' => 'psu'
        ]);
    }

    public function steamGenie()
    {
        return view('collection/steam-genie', [
            'product' => 'sg'
        ]);
    }

    public function cooperExpressPro()
    {
        return view('collection/cooper-express-pro', [
            'product' => 'cep'
        ]);
    }

    public function cooperExpress()
    {
        return view('collection/cooper-express', [
            'product' => 'ce'
        ]);
    }

    public function impact()
    {
        return view('collection/impact', [
            'product' => 'i'
        ]);
    }

    public function colourControlSupreme()
    {
        return view('collection/colour-control-supreme', [
            'product' => 'ccs'
        ]);
    }

    public function quietSuperSteam()
    {
        return view('collection/quiet-super-steam', [
            'product' => 'qss'
        ]);
    }

    public function oneTemperature()
    {
        return view('collection/one-temperature', [
            'product' => 'ot'
        ]);
    }

    public function pearlGlide()
    {
        return view('collection/pearl-glide', [
            'product' => 'pg'
        ]);
    }

    public function mikserRecznySwirl()
    {
        return view('collection/mikser-reczny-swirl', [
            'product' => 'mrs'
        ]);
    }

    public function opiekaczDeepFill()
    {
        return view('collection/opiekacz-deep-fill-3w1-fiesta', [
            'product' => 'odf'
        ]);
    }

    public function parowarCyfrowyMaxicook()
    {
        return view('collection/parowar-cyfrowy-maxicook', [
            'product' => 'pcm'
        ]);
    }

    public function ryzowarCookHome()
    {
        return view('collection/ryzowar-cook-home', [
            'product' => 'rch'
        ]);
    }

    public function zestawDoRaclette()
    {
        return view('collection/zestaw-do-raclette-fiesta', [
            'product' => 'zdr'
        ]);
    }

    public function wyciskarkaDoCytrusow()
    {
        return view('collection/wyciskarka-do-cytrusow', [
            'product' => 'wdc'
        ]);
    }

    public function frytownicaCyclofryPlus()
    {
        return view('collection/frytownica-cyclofry-plus', [
            'product' => 'fcp'
        ]);
    }

    public function blenderKielichowySensigence()
    {
        return view('collection/blender-kielichowy-sensigence', [
            'product' => 'bks'
        ]);
    }

    public function blenderRecznyDesire()
    {
        return view('collection/blender-reczny-desire', [
            'product' => 'brd'
        ]);
    }
}
