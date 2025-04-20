@extends('layouts.app')

@section('title', 'Consejos - Sweet Home')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style03.css') }}" />
@endsection

@section('content')
<div class="container mx-auto px-4 py-10 ">

<h4 class="text-3xl text-center font-bold mb-4" style="color: rgba(18, 90, 28, 0.527);">
        Consejos de Nutrición para una Vida Saludable
    </h4>
    <!-- Consejos Destacados -->
    <section id="consejos" class="mb-12">
        <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Consejos Útiles</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Consejo 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-600 text-white flex items-center justify-center rounded-full mr-4">
                        <i class="fas fa-apple-alt"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Come Más Frutas y Verduras</h3>
                </div>
                <p class="text-gray-600 mb-4">Incorpora una variedad de frutas y verduras en tu dieta diaria para obtener vitaminas y minerales esenciales.</p>
                <a href="{{ route('consejos.comeVerduras') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
            </div>
            <!-- Consejo 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-600 text-white flex items-center justify-center rounded-full mr-4">
                        <i class="fas fa-water"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Bebe Suficiente Agua</h3>
                </div>
                <p class="text-gray-600 mb-4">Mantente hidratado durante todo el día. El agua es crucial para el buen funcionamiento de tu cuerpo.</p>
                <a href="{{ route('consejos.bebeAgua') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
            </div>
            <!-- Consejo 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-600 text-white flex items-center justify-center rounded-full mr-4">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Incluye Ejercicio Regular</h3>
                </div>
                <p class="text-gray-600 mb-4">Combina una alimentación saludable con ejercicio regular para mejorar tu bienestar general.</p>
                <a href="{{ route('consejos.ejercicio') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
            </div>
            <!-- Consejo 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-600 text-white flex items-center justify-center rounded-full mr-4">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Elige Comidas Caseras</h3>
                </div>
                <p class="text-gray-600 mb-4">Preparar tus propias comidas te permite controlar los ingredientes y evitar aditivos innecesarios.</p>
                <a href="{{ route('consejos.comidaCasera') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
            </div>
            <!-- Consejo 5 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-600 text-white flex items-center justify-center rounded-full mr-4">
                        <i class="fas fa-carrot"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Opta por Ingredientes Naturales</h3>
                </div>
                <p class="text-gray-600 mb-4">Escoge alimentos frescos y naturales en lugar de procesados para una dieta más saludable.</p>
                <a href="{{ route('consejos.productosNaturales') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
            </div>
            <!-- Consejo 6 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-600 text-white flex items-center justify-center rounded-full mr-4">
                        <i class="fas fa-broccoli"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Varía tu Dieta</h3>
                </div>
                <p class="text-gray-600 mb-4">No te limites a un tipo de comida. Variar tu dieta te ayuda a obtener una gama más amplia de nutrientes.</p>
                <a href="{{ route('consejos.dietaVariada') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
            </div>
        </div>
    </section>

    <!-- Sección de Recetas Recomendadas -->
    <section id="recetas-recomendadas" class="bg-green-100 py-12 px-4 rounded-lg mb-12">
        <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Recetas Recomendadas</h2>
        <p class="text-gray-700 mb-8 text-center">Además de estos consejos, aquí tienes algunas recetas saludables que puedes probar.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Receta 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('imgRecetas/MagdalenasNaranjaChocolate.png') }}" alt="Magdalenas de Naranja y Chocolate" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Magdalenas de Naranja y Chocolate</h3>
                <p class="text-gray-600 mb-4">Un postre nutritivo y lleno de sabor, ideal para cualquier desayuno.</p>
                <a href="{{ route('desayunos.mNC') }}" class="text-blue-500 hover:text-blue-700">Ver Receta</a>
            </div>
            <!-- Receta 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('imgRecetas/Smoothie-Verde.png') }}" alt="Smoothie Verde" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Smoothie Verde</h3>
                <p class="text-gray-600 mb-4">Un smoothie refrescante lleno de vitaminas y minerales.</p>
                <a href="{{ route('bebidas.smoV') }}" class="text-blue-500 hover:text-blue-700">Ver Receta</a>
            </div>
            <!-- Receta 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('imgRecetas/espaguetis-con-salsa-de-espinacas.png') }}" alt="Espaguetis con Salsa de Espinacas y Quesos" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Espaguetis con Salsa de Espinacas y Quesos</h3>
                <p class="text-gray-600 mb-4">Un plato principal saludable, nutritivo y fácil de preparar.</p>
                <a href="{{ route('almuerzos.espagV') }}" class="text-blue-500 hover:text-blue-700">Ver Receta</a>
            </div>
        </div>
    </section>

    <!-- Sección de Testimonios -->
    <section id="testimonios" class="py-12 px-4 bg-gray-200 rounded-lg mb-12">
        <h2 class="text-3xl font-semibold mb-6 text-center text-gray-800">Testimonios de Nuestros Usuarios</h2>
        <div class="max-w-2xl mx-auto">
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <p class="text-gray-600 mb-4">"Los consejos y recetas de Sweet Home han transformado mi alimentación. ¡Me siento más saludable y lleno de energía!"</p>
                <p class="text-gray-800 font-semibold">María González</p>
                <p class="text-gray-500">Nutricionista</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <p class="text-gray-600 mb-4">"Me encanta la variedad de recetas saludables y fáciles de seguir. ¡Definitivamente recomiendo este sitio a todos!"</p>
                <p class="text-gray-800 font-semibold">Luis Rodríguez</p>
                <p class="text-gray-500">Chef Amateur</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-600 mb-4">"He aprendido mucho sobre nutrición gracias a los consejos de Sweet Home. ¡Sigan así!"</p>
                <p class="text-gray-800 font-semibold">Ana Martínez</p>
                <p class="text-gray-500">Cliente Satisfecha</p>
            </div>
        </div>
    </section>

    </div>
@endsection