@extends('layouts.app2')
@section('title','Bebidas')

@section('back_url', route('recetas'))

@section('header_title', 'Bebidas Refrescantes y Deliciosas🥤🍹☕')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

<!-- Tarjeta 1: Vasito de Avena y Yogur con Melocotón -->
<a href="{{ route('bebidas.sCRMY') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/smoothie-melocoton-yogur.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Smoothie o batido cremoso de melocotón y yogur</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 5'</span>
            <span><i class="bi bi-people"></i> 3 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 2: Crepes Caseras 3 Ingredientes -->
<a href="{{ route('bebidas.aH') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/aguahorchata.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Agua de Horchata</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 5'</span>
            <span><i class="bi bi-people"></i> 3 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 3: Bagel de Atún -->
<a href="{{ route('bebidas.hM') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/HorchataManzana.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Horchata de Manzana</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 10'</span>
            <span><i class="bi bi-people"></i> 6 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 4: Magdalenas de Naranja y Chocolate -->
<a href="{{ route('bebidas.lMC') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/licuadomanzanacanela.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Licuado de Manzana y Canela</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 30'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 5: Bowl de Avena con Arándanos, Plátano y Crema de Cacahuete -->
<a href="{{ route('bebidas.pi') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/piñada.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Piñada</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 6: Tacos de Huevos Revueltos con Tomate y Aguacate -->
<a href="{{ route('bebidas.aGP') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/aguaguayabaplatano.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Agua de Guayaba con Plátano</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 6 ingredientes</span>
        </div>
    </div>
</a>

<a href="{{ route('bebidas.aAFP') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/aguaavenafresaplatano.png') }}" alt="Agua de Avena, Fresa y Plátano" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Agua de Avena, Fresa y Plátano</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 8 ingredientes</span>
        </div>
    </div>
</a>
<a href="{{ route('bebidas.aCM') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/aguamango.png') }}" alt="Agua Cremosa de Mango" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Agua Cremosa de Mango</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 20'</span>
            <span><i class="bi bi-people"></i> 8 ingredientes</span>
        </div>
    </div>
</a>
<a href="{{ route('bebidas.sACHP') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/smothieavenachocopla.png') }}" alt="Smoothie de Avena con Chocolate y Plátano" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Smoothie de Avena con Chocolate y Plátano</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 10'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>
</div>
@endsection