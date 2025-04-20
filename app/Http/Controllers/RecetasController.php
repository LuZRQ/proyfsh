<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetasController extends Controller
{
    public function index()
    {
        return view('recetas'); 
    }

    public function desayunos()
    {
        return view('rec1.desayunos'); 
    }

    public function almuerzos()
    {
        return view('rec1.almuerzos'); 
    }

    public function bebidas()
    {
        return view('rec1.bebidas');
    }

    public function cenas()
    {
        return view('rec1.cenas');
    }

    public function postres()
    {
        return view('rec1.postres');
    }

    public function snacks()
    {
        return view('rec1.snacks');
    }

}
