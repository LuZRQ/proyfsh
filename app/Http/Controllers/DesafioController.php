<?php

namespace App\Http\Controllers;

use App\Models\Desafio;
use Illuminate\Http\Request;

class DesafioController extends Controller
{
    public function actualizarDesafio(Request $request)
{
    $usuario = auth()->user();
    $desafio = Desafio::where('user_id', $usuario->id)->first();

    // Si no hay registro del desafío, lo creamos
    if (!$desafio) {
        $desafio = new Desafio();
        $desafio->user_id = $usuario->id;
        $desafio->save();
    }

    // Actualizar puntos y días
    $desafio->puntos += 1;
    $desafio->dias_completados += 1;

    // Si completó los 7 días, asignar estrella
    if ($desafio->dias_completados >= 7) {
        $desafio->estrellas += 1;
        $desafio->dias_completados = 0; // Reiniciar para la próxima semana
    }

    $desafio->save();

    return redirect()->back()->with('mensaje', '¡Desafío actualizado! Estrella ganada si completaste la semana.');
}

}
