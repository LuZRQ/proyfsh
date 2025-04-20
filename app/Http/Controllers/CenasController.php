<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CenasController extends Controller
{
    public function brPGR()
    {
        return view('rec1.cenas.brPGR');
    }

    public function cAP()
    {
        return view('rec1.cenas.cAP');
    }

    public function cJVG()
    {
        return view('rec1.cenas.cJVG');
    }

    public function cV()
    {
        return view('rec1.cenas.cV');
    }

    public function lVL()
    {
        return view('rec1.cenas.lVL');
    }

    public function rECH()
    {
        return view('rec1.cenas.rECH');
    }

    public function sPAE()
    {
        return view('rec1.cenas.sPAE');
    }

    public function sVJ()
    {
        return view('rec1.cenas.sVJ');
    }

    public function tCJ()
    {
        return view('rec1.cenas.tCJ');
    } 
}
