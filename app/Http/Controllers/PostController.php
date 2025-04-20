<?php

namespace App\Http\Controllers;

use App\Models\Contacto; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function contacto()
    {
        return view('contacto');
    }

    public function sobreNosotros()
    {
        return view('sobreNosotros');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }


    public function guardarContacto(Request $request)
    {
        // Validación (opcional pero recomendado)
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        // Crear y guardar en la base de datos
        Contacto::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
        ]);

        // Redireccionar con mensaje de éxito
        return redirect()->back()->with('success', '¡Mensaje enviado con éxito!');
    }
}
