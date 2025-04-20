@extends('layouts.app')

@section('title', 'Contacto - Sweet Home')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style06.css') }}" />
@endsection

@section('content')
<main class="container mx-auto px-4 py-6">
   
    <!-- Sección de Introducción -->
    <section id="introduccion" class="mb-12 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-6">¡Pongámonos en Contacto!</h2>
        <p class="text-gray-700 mb-8">¿Tienes alguna pregunta, comentario o sugerencia? No dudes en ponerte en contacto con nosotros. ¡Estamos aquí para ayudarte!</p>
    </section>
   
    <!-- Formulario de Contacto -->
    <section id="contacto" class="mb-12">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">

        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
            <form id="contactForm" action="{{ route('contacto') }}" method="POST">
                @csrf <!-- Token CSRF para protección -->
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 text-sm font-semibold mb-2">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Tu nombre" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Tu correo electrónico" required>
                </div>
                <div class="mb-4">
                    <label for="mensaje" class="block text-gray-700 text-sm font-semibold mb-2">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Tu mensaje" rows="4" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Enviar Mensaje</button>
            </form>
        </div>
    </section>

</main>
@endsection