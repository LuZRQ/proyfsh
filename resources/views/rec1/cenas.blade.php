@extends('layouts.app2')
@section('title','Cenas')

@section('back_url', route('recetas'))

@section('header_title', 'Cenas Ligeras y Sabrosas 🍽️🍝🥗')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

<!-- Tarjeta 1: Crema de judías verdes con gambas -->
<a href="{{ route('cenas.cJVG') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/crema-de-judias-verdes-con-gambas.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Crema de judías verdes con gambas</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 5'</span>
            <span><i class="bi bi-people"></i> 3 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 2: Sándwich de pollo asado con ensalada -->
<a href="{{ route('cenas.sPAE') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/sandwich-de-pollo-asado-con-ensalada.png') }}" alt="Sándwich de pollo asado con ensalada" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Sándwich de pollo asado con ensalada</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 5'</span>
            <span><i class="bi bi-people"></i> 3 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 3: Tortilla de champiñones y jamón -->
<a href="{{ route('cenas.tCJ') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/tortilla-de-champinones-y-jamon.png') }}" alt="Tortilla de champiñones y jamón" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Tortilla de champiñones y jamón</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 10'</span>
            <span><i class="bi bi-people"></i> 6 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 4: Salmón con verduritas en su jugo -->
<a href="{{ route('cenas.sVJ') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/cenas-sanas-salmon-esparragos-silvestres.png') }}" alt="Salmón con verduritas en su jugo" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Salmón con verduritas en su jugo</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 30'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 5: Lasaña vegetal light -->
<a href="{{ route('cenas.lVL') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/lasana-vegetal-light.png') }}" alt="Lasaña vegetal light" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Lasaña vegetal light</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 6: Conejo asado con patatas -->
<a href="{{ route('cenas.cAP') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/cenas-sanas-patatas-conejo-asados.png') }}" alt="Conejo asado con patatas" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Conejo asado con patatas</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 6 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 7: Revuelto de espárragos y champiñones -->
<a href="{{ route('cenas.rECH') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/recetas-saciantes-revuelto-esparragos-champinones.png') }}" alt="Revuelto de espárragos y champiñones" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Revuelto de espárragos y champiñones</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 8 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 8: Brócoli y patata gratinados -->
<a href="{{ route('cenas.brPGR') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/brocoli-gratinado.png') }}" alt="Brócoli y patata gratinados" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Brócoli y patata gratinados</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 20'</span>
            <span><i class="bi bi-people"></i> 8 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 9: Cuscús con verduras -->
<a href="{{ route('cenas.cV') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/cenas-sanas-cuscus-frutos-secos.png') }}" alt="Cuscús con verduras" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Cuscús con verduras</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 10'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

</div>
@endsection