@extends('layouts.app2')
@section('title','Postres')

@section('back_url', route('recetas'))

@section('header_title', 'Postres Irresistibles 🍰🍫🧁')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

<!-- Tarjeta 1: Flan Frutal -->
<a href="{{ route('postres.flFR') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/flan-frutal.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Flan frutal</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 5'</span>
            <span><i class="bi bi-people"></i> 3 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 2: Yogur Dorado a la Cúrcuma -->
<a href="{{ route('postres.yDC') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/yogur-dorado-a-la-curcuma.png') }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Yogur dorado a la cúrcuma</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 5'</span>
            <span><i class="bi bi-people"></i> 3 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 3: Carpaccio de Piña con Yogur -->
<a href="{{ route('postres.cPY') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/carpaccio-de-pina-con-yogur.png') }}" alt="Carpaccio de Piña con Yogur" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Carpaccio de piña con yogur</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 10'</span>
            <span><i class="bi bi-people"></i> 6 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 4: Brownie con Frutas -->
<a href="{{ route('postres.bFR') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/brownie-con-frutas.png') }}" alt="Brownie con Frutas" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Brownie con frutas</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 30'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 5: Bavaroise de Lima, Yogur y Mango -->
<a href="{{ route('postres.bLYM') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/bavaroise-de-lima-yogur-y-mango.png') }}" alt="Bavaroise de Lima, Yogur y Mango" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Bavaroise de lima, yogur y mango</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 6: Bombones de Fresa y Kiwi con Chocolate -->
<a href="{{ route('postres.bFRKCH') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/bombones-de-fresa-y-kiwi-con-chocolate.png') }}" alt="Bombones de Fresa y Kiwi con Chocolate" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Bombones de fresa y kiwi con chocolate</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 6 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 7: Sorbete de Melocotón -->
<a href="{{ route('postres.sMM') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/sorbete-de-melocoton.png') }}" alt="Sorbete de Melocotón" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Sorbete de melocotón</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 15'</span>
            <span><i class="bi bi-people"></i> 8 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 8: Papaya y Mango con Helado de Té Matcha -->
<a href="{{ route('postres.pMHTM') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/papaya-y-mango-con-helado-de-te-matcha.png') }}" alt="Papaya y Mango con Helado de Té Matcha" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Papaya y mango con helado de té matcha</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 20'</span>
            <span><i class="bi bi-people"></i> 8 ingredientes</span>
        </div>
    </div>
</a>

<!-- Tarjeta 9: Bizcocho de Aguacate -->
<a href="{{ route('postres.bAguacate') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ asset('imgRecetas/bizcocho-de-aguacate.png') }}" alt="Bizcocho de Aguacate" class="w-full h-48 object-cover">
    <div class="p-4">
        <h2 class="text-lg font-semibold mb-2">Bizcocho de aguacate</h2>
        <div class="flex justify-between text-sm text-gray-500">
            <span><i class="bi bi-clock"></i> 10'</span>
            <span><i class="bi bi-people"></i> 7 ingredientes</span>
        </div>
    </div>
</a>

</div>
@endsection