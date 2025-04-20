@extends('layouts.app')

@section('title', 'Recetas 🥗 - Sweet Home')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style02.css') }}" />
@endsection

@section('content')
<div class="container mx-auto px-4 py-10 ">
   
    <!-- Categorías de Recetas -->
    <section id="categorias" class="mb-16 py-4 ">
        <h2 class="text-4xl font-semibold mb-6 text-center textt" >Categorías de Recetas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Categoría 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('img/port1D.png') }}" alt="Desayunos" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Desayunos Saludables</h3>
                <p class="text-gray-600 mb-4">Empieza tu día con energía con nuestras recetas de desayunos nutritivos.</p>
                <a href="{{ route('desayunos') }}" class="text-blue-500 hover:text-blue-700">Ver Desayunos</a>
            </div>
            <!-- Categoría 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('img/port2AA.png') }}" alt="Almuerzos" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Almuerzos Equilibrados</h3>
                <p class="text-gray-600 mb-4">Recetas deliciosas para un almuerzo saludable y satisfactorio.</p>
                <a href="{{ route('almuerzos') }}" class="text-blue-500 hover:text-blue-700">Ver Almuerzos</a>
            </div>
            <!-- Categoría 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('img/port3C.png') }}" alt="Cenas" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Cenas Ligeras</h3>
                <p class="text-gray-600 mb-4">Disfruta de cenas ligeras y nutritivas para terminar bien el día.</p>
                <a href="{{ url('/cenas') }}" class="text-blue-500 hover:text-blue-700">Ver Cenas</a>
            </div>
            <!-- Categoría 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('img/port4S.png') }}" alt="Snacks" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Snacks Saludables</h3>
                <p class="text-gray-600 mb-4">Recetas de snacks saludables para mantenerte lleno de energía.</p>
                <a href="{{ url('/snacks') }}" class="text-blue-500 hover:text-blue-700">Ver Snacks</a>
            </div>
            <!-- Categoría 5 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('img/port5P.png') }}" alt="Postres" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Postres Saludables</h3>
                <p class="text-gray-600 mb-4">Disfruta de postres deliciosos sin culpa con nuestras recetas saludables.</p>
                <a href="{{ url('/postres') }}" class="text-blue-500 hover:text-blue-700">Ver Postres</a>
            </div>
            <!-- Categoría 6 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="{{ asset('img/port6B.png') }}" alt="Bebidas" class="w-full h-40 object-cover rounded-md mb-4">
                <h3 class="text-xl font-semibold mb-2">Bebidas Nutritivas</h3>
                <p class="text-gray-600 mb-4">Recetas de bebidas saludables para refrescarte y nutrirte.</p>
                <a href="{{ url('/bebidas') }}" class="text-blue-500 hover:text-blue-700">Ver Bebidas</a>
            </div>
        </div>
    </section>

    
</div>
@endsection
