@extends('layouts.app')

@section('title', 'Nosotros - Sweet Home')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style07.css') }}" />
@endsection

@section('content')
<main class="container mx-auto px-4 py-10">

    <!-- Espacio para mostrar la aplicación -->
    <div class="container mx-auto">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-semibold mb-4">Descarga nuestra aplicación Sweet Home</h2>
            <p class="text-gray-600 mb-4">Accede a planes de comidas personalizados y recetas saludables.</p>
            <a href="{{ asset('apk/sweet-home.apk') }}" class="bg-red-400 text-white px-6 py-3 rounded-md hover:bg-red-900 transition duration-400" download>Descargar APK</a>
            <br>
            <p class="text-red-800 fw-bold mb-4 mt-4">Después de descargar, asegúrate de habilitar las instalaciones de aplicaciones de fuentes desconocidas en tu dispositivo.</p>
        </div>
    </div>

    <!-- Sección de Introducción -->
    <section id="introduccion" class="mb-12 text-center mt-5">
        <h2 class="text-4xl font-bold text-gray-800 mb-6">Conoce a Nuestro Equipo</h2>
        <p class="text-gray-700 mb-8">Estamos dedicados a ayudarte a llevar una vida saludable a través de la buena alimentación y el bienestar general.</p>
    </section>

    <!-- Sección de Misión y Visión -->
    <section id="mision-vision" class="mb-12">
        <div class="text-center">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800">Nuestra Misión y Visión</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Misión -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">Nuestra Misión</h3>
                    <p class="text-gray-600">Ofrecerte las mejores recetas y consejos para ayudarte a mantener una alimentación saludable y equilibrada.</p>
                </div>
                <!-- Visión -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">Nuestra Visión</h3>
                    <p class="text-gray-600">Convertirnos en una fuente confiable de información sobre nutrición y bienestar para personas de todas las edades.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección del Equipo -->
    <section id="equipo" class="mb-12">
        <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Conoce a Nuestro Equipo</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Miembro del equipo 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('img/leo.png') }}" alt="Miembro del equipo" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2 text-gray-800">Leonor Chinchi Salinas</h3>
                <p class="text-gray-600">Fundadora y programadora</p>
                <p class="text-gray-500">Apasionada por música y el diseño</p>
            </div>
            <!-- Miembro del equipo 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('img/zl.png') }}" alt="Miembro del equipo" class="w-24 h-24 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2 text-gray-800">L. Zabaleta Quispe</h3>
                <p class="text-gray-600">Fundadora y programadora</p>
                <p class="text-gray-500">Se basa en el diseño, aficionada con los colores, y la buena alimentación</p>
            </div>
        </div>
    </section>

    <!-- Sección de Política y Condiciones -->
    <section id="politica-condiciones" class="mb-12 text-center">
        <p class="text-gray-700">Incluye una breve descripción de tu sitio y un enlace a la política de privacidad y condiciones de servicio.</p>
        <p class="text-gray-600">
            <a href="{{ route('privacy') }}" class="text-blue-600 hover:underline">Política de Privacidad</a> |
            <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">Condiciones de Servicio</a>
        </p>
    </section>

</main>
@endsection