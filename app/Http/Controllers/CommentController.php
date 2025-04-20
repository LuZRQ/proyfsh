<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get(); // Obtener todos los comentarios, ordenados por fecha
        return view('home', compact('comments'));
    }

    // Almacenar un nuevo comentario
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:500', // Validación del comentario
            'name' => 'nullable|string|max:100', // Validación del nombre
        ]);

        // Crear el nuevo comentario en la base de datos
        Comment::create([
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        return redirect()->route('home')->with('success', 'Comentario enviado exitosamente.');
    }
}
