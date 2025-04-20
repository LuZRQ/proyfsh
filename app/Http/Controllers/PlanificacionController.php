<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanificacionController extends Controller
{
    public function index()
    {
        return view('planificacion');
    }

    public function ganarMusculo()
    {
        return view('planificacion.ganarMusculo');
    }

    public function perdidaPeso()
    {
        return view('planificacion.perdidaPeso');
    }

    public function planDeportista()
    {
        return view('planificacion.planDeportista');
    }

    public function planFamily()
    {
        return view('planificacion.planFamily');
    }

    public function planPrincipiante()
    {
        return view('planificacion.planPrincipiante');
    }

    public function planVegano()
    {
        return view('planificacion.planVegano');
    }
}
