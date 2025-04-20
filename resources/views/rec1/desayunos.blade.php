@extends('layouts.app2')
@section('title','Desayunos')

@section('back_url', route('recetas'))

@section('header_title', 'Desayunos Energéticos y Deliciosos 🥗🥐☕')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {{-- Tarjeta 1 --}}
        <a href="{{ route('desayunos.vAYM') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/VasitoAvenaYogurmelocoton.png') }}" alt="Vasito de Avena y Yogur con Melocotón" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Vasito de Avena y Yogur con Melocotón</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 5'</span>
                    <span><i class="bi bi-people"></i> 6 ingredientes</span>
                </div>
            </div>
        </a>

        {{-- Tarjeta 2 --}}
        <a href="{{ route('desayunos.cC') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/CrepesCaser3.png') }}" alt="Crepes Caseras 3 Ingredientes" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Crepes Caseras 3 Ingredientes</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 5'</span>
                    <span><i class="bi bi-people"></i> 3 ingredientes</span>
                </div>
            </div>
        </a>

        {{-- Tarjeta 3 --}}
        <a href="{{ route('desayunos.bagelAtun') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/bagelAtun.png') }}" alt="Bagel de Atún" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Bagel de Atún</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 10'</span>
                    <span><i class="bi bi-people"></i> 6 ingredientes</span>
                </div>
            </div>
        </a>

        {{-- Tarjeta 4 --}}
        <a href="{{ route('desayunos.mNC') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/MagdalenasNaranjaChocolate.png') }}" alt="Magdalenas de Naranja y Chocolate" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Magdalenas de Naranja y Chocolate</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 30'</span>
                    <span><i class="bi bi-people"></i> 7 ingredientes</span>
                </div>
            </div>
        </a>

        {{-- Tarjeta 5 --}}
        <a href="{{ route('desayunos.bAA') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/bowlAvenaArandaPlatanCrem.png') }}" alt="Bowl de Avena con Arándanos, Plátano y Crema de Cacahuete" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Bowl de Avena con Arándanos, Plátano y Crema de Cacahuete</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 15'</span>
                    <span><i class="bi bi-people"></i> 7 ingredientes</span>
                </div>
            </div>
        </a>

        {{-- Tarjeta 6 --}}
        <a href="{{ route('desayunos.tHTA') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/TacosHuevoRevueltTomatoAguacate.png') }}" alt="Tacos de Huevos Revueltos con Tomate y Aguacate" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Tacos de Huevos Revueltos con Tomate y Aguacate</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 15'</span>
                    <span><i class="bi bi-people"></i> 6 ingredientes</span>
                </div>
            </div>
        </a>

        {{-- Tarjeta 7 --}}
        <a href="{{ route('desayunos.vAC') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/VasitoAvenChocolate.png') }}" alt="Vasito de Avena y Chocolate" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Vasito de Avena y Chocolate</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 15'</span>
                    <span><i class="bi bi-people"></i> 8 ingredientes</span>
                </div>
            </div>
        </a>

        {{-- Tarjeta 8 --}}
        <a href="{{ route('desayunos.sHTF') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/SartenHuevTomQue.png') }}" alt="Sartén de Huevos con Tomate y Queso Feta" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Sartén de Huevos con Tomate y Queso Feta</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 20'</span>
                    <span><i class="bi bi-people"></i> 8 ingredientes</span>
                </div>
            </div>
        </a>

        {{-- Tarjeta 9 --}}
        <a href="{{ route('desayunos.pZ') }}" class="recipe-card bg-white rounded-lg shadow-lg overflow-hidden block">
            <img src="{{ asset('imgRecetas/PoprridgeZabahoria.png') }}" alt="Porridge de Zanahoria" class="w-full h-48">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">Porridge de Zanahoria</h2>
                <div class="flex justify-between text-sm text-gray-500">
                    <span><i class="bi bi-clock"></i> 10'</span>
                    <span><i class="bi bi-people"></i> 7 ingredientes</span>
                </div>
            </div>
        </a>

    </div>

@endsection
