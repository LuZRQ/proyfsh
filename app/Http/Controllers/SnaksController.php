<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnaksController extends Controller
{
    public function aCRS()
    {
        return view('rec1.snacks.aCRS');
    }

    public function bAJONJOLI()
    {
        return view('rec1.snacks.bAJONJOLI');
    }

    public function bBC()
    {
        return view('rec1.snacks.bBC');
    }

    public function brPA()
    {
        return view('rec1.snacks.brPA');
    }

    public function gFRE()
    {
        return view('rec1.snacks.gFRE');
    }

    public function mCAL()
    {
        return view('rec1.snacks.mCAL');
    }
}
