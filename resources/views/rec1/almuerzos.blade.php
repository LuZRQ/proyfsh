@extends('layouts.app2')
@section('title','Almuerzos')

@section('back_url', route('recetas'))

@section('header_title', 'Almuerzos Perfectos y Nutritivos🍽️🥗🍲')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Tarjeta 1: Vasito de Avena y Yogur con Melocotón -->
        <a href="{{ route('almuerzos.eFPP') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/ensalada-fresca-de-pasta-con-pavo.png') }}" alt="Ensalada Fresca de Pasta con Pavo" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Ensalada Fresca de Pasta con Pavo</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 15'</span>
                    <span><i class="bi bi-people"></i> 7 ingredientes</span>
                </div>
            </div>
        </a>

        <!-- Tarjeta 2: Crepes Caseras 3 Ingredientes -->
        <a href="{{ route('almuerzos.eSEQ') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/espaguetis-con-salsa-de-espinacas.png') }}" alt="Espaguetis con Salsa de Espinacas y Quesos" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Espaguetis con Salsa de Espinacas y Quesos</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 20'</span>
                    <span><i class="bi bi-people"></i> 9 ingredientes</span>
                </div>
            </div>
        </a>

        <!-- Tarjeta 3: Bagel de Atún -->
        <a href="{{ route('almuerzos.eAAM') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/ensalada-de-arroz-con-atun-huevo.png') }}" alt="Ensalada de Arroz con Atún, Huevo y Maíz" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Ensalada de Arroz con Atún, Huevo y Maíz</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 10'</span>
                    <span><i class="bi bi-people"></i> 8 ingredientes</span>
                </div>
            </div>
        </a>

        <!-- Tarjeta 4: Magdalenas de Naranja y Chocolate -->
        <a href="{{ route('almuerzos.berCA') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/berenjenas-con-carne-estilo.png') }}" alt="Berenjenas con Carne estilo Asiático" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Berenjenas con Carne estilo Asiático</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 30'</span>
                    <span><i class="bi bi-people"></i> 10 ingredientes</span>
                </div>
            </div>
        </a>

        <!-- Tarjeta 5: Pastel de Patata, Jamón y Queso -->
        <a href="{{ route('almuerzos.cEM') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/almuerzo-saludable-cestitas-de-ensalada-de-marisco.png') }}" alt="Cestitas de ensalada de marisco" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Cestitas de ensalada de marisco</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 45'</span>
                    <span><i class="bi bi-people"></i> 7 ingredientes</span>
                </div>
            </div>
        </a>

        <!-- Tarjeta 6: Flores de Alcachofas con Jamón Ibérico -->
        <a href="{{ route('almuerzos.fAJI') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/flores-de-alcachofas-con-jamon-iberico.png') }}" alt="Flores de alcachofas con jamón ibérico" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Flores de alcachofas con jamón ibérico</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 35'</span>
                    <span><i class="bi bi-people"></i> 4 ingredientes</span>
                </div>
            </div>
        </a>

        <!-- Tarjeta 7: Canelones Fríos con Atún en Escabeche y Guisantes -->
        <a href="{{ route('almuerzos.cFAEG') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/canelones-frios-con-atun-en-escabeche-y-guisantes.png') }}" alt="Canelones fríos con atún en escabeche y guisantes" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Canelones fríos con atún en escabeche y guisantes</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 20'</span>
                    <span><i class="bi bi-people"></i> 7 ingredientes</span>
                </div>
            </div>
        </a>

        <!-- Tarjeta 8: Pollo a la Plancha con Verduras al Pesto -->
        <a href="{{ route('almuerzos.pPVP') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/pollo-a-la-plancha-con-verduras-al-pesto.png') }}" alt="Pollo a la plancha con verduras al pesto" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Pollo a la plancha con verduras al pesto</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 20'</span>
                    <span><i class="bi bi-people"></i> 8 ingredientes</span>
                </div>
            </div>
        </a>

        <!-- Tarjeta 9: Quinoa Salteada con Verduras, Tiras de Tortilla y Pollo -->
        <a href="{{ route('almuerzos.qSVTP') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('imgRecetas/quinoa-salteada-con-verduras-tiras-de-tortilla-y-pollo.png') }}" alt="Quinoa salteada con verduras, tiras de tortilla y pollo" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Quinoa salteada con verduras, tiras de tortilla y pollo</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 40'</span>
                    <span><i class="bi bi-people"></i> 14 ingredientes</span>
                </div>
            </div>
        </a>

    </div>
@endsection