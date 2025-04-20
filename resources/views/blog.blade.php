@extends('layouts.app')

@section('title', 'Blog - Sweet Home')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style05.css') }}" />
@endsection

@section('content')
<div class="container mx-auto px-4 py-10 ">
<h4 class="text-3xl text-center font-bold mb-4" style="color: rgba(0, 37, 23, 0.527);">
        ¡Bienvenidos a Nuestro Blog!
    </h4>
    <!-- Artículos del Blog -->
    <section id="articulos" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
        <!-- Artículo 1 -->
        <article class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/5 Beneficios de Comer Más Vegetales.png') }}" alt="Artículo 1" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold mb-2">5 Beneficios de Comer Más Vegetales</h3>
            <p class="text-gray-600 mb-4">
                Descubre por qué incluir más vegetales en tu dieta puede mejorar tu salud de manera significativa.
            </p>
            <a href="{{ route('blog.beCoVe') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
        </article>
        <!-- Artículo 2 -->
        <article class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/Cómo Crear un Plan de Comidas Semanal.png') }}" alt="Artículo 2" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold mb-2">Cómo Crear un Plan de Comidas Semanal</h3>
            <p class="text-gray-600 mb-4">
                Aprende a planificar tus comidas de manera eficiente para llevar una alimentación balanceada.
            </p>
            <a href="{{ route('blog.planSem') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
        </article>
        <!-- Artículo 3 -->
        <article class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/Los Mejores Smoothies para Desayunar.png') }}" alt="Artículo 3" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold mb-2">Los Mejores Smoothies para Desayunar</h3>
            <p class="text-gray-600 mb-4">
                Recetas deliciosas y nutritivas para comenzar tu día con energía.
            </p>
            <a href="{{ route('blog.smothies') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
        </article>
        <!-- Artículo 4 -->
        <article class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/Alimentos para Aumentar tu Energía.png') }}" alt="Artículo 4" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold mb-2">Alimentos para Aumentar tu Energía</h3>
            <p class="text-gray-600 mb-4">
                Conoce los mejores alimentos para mantener tu energía durante todo el día.
            </p>
            <a href="{{ route('blog.recuEner') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
        </article>
        <!-- Artículo 5 -->
        <article class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/Beneficios de una Dieta Sin Azúcar (1).png') }}" alt="Artículo 5" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold mb-2">Beneficios de una Dieta Sin Azúcar</h3>
            <p class="text-gray-600 mb-4">
                Explora cómo reducir el azúcar en tu dieta puede mejorar tu salud.
            </p>
            <a href="{{ route('blog.diSu') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
        </article>
        <!-- Artículo 6 -->
        <article class="bg-white p-6 rounded-lg shadow-lg">
            <img src="{{ asset('img/super.jpg') }}" alt="Artículo 6" class="w-full h-40 object-cover rounded-md mb-4">
            <h3 class="text-xl font-semibold mb-2">Superalimentos: Qué Son y Cómo Incluirlos en tu Dieta</h3>
            <p class="text-gray-600 mb-4">
                Nutrición Vital: La clave para una vida saludable radica en elegir alimentos que nutran tu cuerpo y mente, proporcionándote energía y bienestar en cada momento del día.
            </p>
            <a href="{{ route('blog.superAlimen') }}" class="text-blue-500 hover:text-blue-700">Leer Más</a>
        </article>
    </section>
    </div>
@endsection