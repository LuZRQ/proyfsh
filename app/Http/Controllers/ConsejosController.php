<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsejosController extends Controller
{
    public function index()
    {
        return view('consejos'); 
    }
     public function bebeAgua()
     {
         return view('consejos.bebeAgua');
     }
     public function comeVerduras()
     {
        return view('consejos.comeVerduras');
     }

public function comidaCasera()
{
    return view('consejos.comidaCasera');
}

public function dietaVariada()
{
    return view('consejos.dietaVariada');
}

public function ejercicio()
{
    return view('consejos.ejercicio');
}

public function productosNaturales()
{
    return view('consejos.productNatural');
}
}
