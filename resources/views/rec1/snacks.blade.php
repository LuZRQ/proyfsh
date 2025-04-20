@extends('layouts.app2')
@section('title','Snacks')

@section('back_url', route('recetas'))

@section('header_title', 'Snacks para Todos los Gustos 🥨🍿🧀')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

<!-- Tarjeta 1: Barras de Ajonjolí o Sésamo -->
<a href="{{ route('snacks.bAJONJOLI') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/barras-de-ajonjoli.png') }}" alt="Barras de Ajonjolí o Sésamo" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Barras de Ajonjolí o Sésamo</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 5'</span>
            <span><i class="bi bi-people"></i> 3 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 2: Apple Crumble sin gluten y sin azúcar refinada -->
<a href="{{ route('snacks.aCRS') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/apple-crumble-saludable.png') }}" alt="Apple Crumble sin gluten y sin azúcar refinada" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Apple Crumble sin gluten y sin azúcar refinada</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 5'</span>
            <span><i class="bi bi-people"></i> 3 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 3: Muffins de Calabaza -->
<a href="{{ route('snacks.mCAL') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/muffins-de-calabaza.png') }}" alt="Muffins de Calabaza" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Muffins de calabaza</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 10'</span>
            <span><i class="bi bi-people"></i> 6 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 4: Brownies de Papa -->
<a href="{{ route('snacks.brPA') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/brownies-de-papa.png') }}" alt="Brownies de Papa" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Brownies de papa</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 30'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 5: Barritas de Banana o Cambur -->
<a href="{{ route('snacks.bBC') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/barritas-de-cambur.png') }}" alt="Barritas de Banana o Cambur" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Barritas de Banana o Cambur</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 6: Gomitas o Gominolas de Fresa Caseras -->
<a href="{{ route('snacks.gFRE') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/gomitas-de-fresa.png') }}" alt="Gomitas o Gominolas de Fresa Caseras" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Gomitas o gominolas de fresa caseras y sin azúcar</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 6 ingredientes</span>
        </div>
    </div>
</a>

</div>
@endsection