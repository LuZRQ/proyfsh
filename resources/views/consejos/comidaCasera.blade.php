@extends('layouts.app3')
@section('title','Consejos')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style03.css') }}" />
@endsection
@section('back_url', route('consejos'))
@section('header_title', '¡Come sano, hecho en casa! 🏠🍴')

@section('content')
<div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-green-800 mb-4">Elige Comidas Caseras</h1>
        <p class="text-lg text-gray-600 italic">"Preparar tus propias comidas te permite controlar los ingredientes y evitar aditivos innecesarios."</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sección del Consejo -->
        <article class="md:col-span-3 bg-white p-8 rounded-lg shadow-lg">
            <!-- Imagen llamativa -->
            <div class="flex justify-center">
                <img src="{{ asset('img/comidcaser.png') }}" alt="Comida Casera" class="rounded-lg shadow-md">
            </div>

            <!-- Texto informativo -->
            <div>
                <h2 class="text-2xl font-bold text-green-700 mb-4">Beneficios de Comer en Casa</h2>
                <ul class="list-disc ml-5 text-lg text-gray-700 space-y-3">
                    <li>Controla la calidad de los ingredientes, seleccionando los más frescos y saludables.</li>
                    <li>Evita el uso de conservantes y aditivos innecesarios que se encuentran en comidas procesadas.</li>
                    <li>Ahorras dinero al evitar los costos adicionales de restaurantes o comida rápida.</li>
                    <li>Fomenta hábitos alimenticios más saludables para toda la familia.</li>
                    <li>Personaliza tus platos según tus necesidades nutricionales y preferencias.</li>
                </ul>
            </div>
        </article>

        <!-- Nueva sección para enlaces a otros consejos -->
        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Consejos</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('consejos.comeVerduras') }}" class="text-blue-600 hover:underline">Consejo 1: Come Más Frutas y Verduras</a></li>
                <li><a href="{{ route('consejos.ejercicio') }}" class="text-blue-600 hover:underline">Consejo 2: Incluye Ejercicio Regular</a></li>
                <li><a href="{{ route('consejos.bebeAgua') }}" class="text-blue-600 hover:underline">Consejo 3: Bebe Suficiente Agua</a></li>
                <li><a href="{{ route('consejos.productosNaturales') }}" class="text-blue-600 hover:underline">Consejo 4: Opta por Ingredientes Naturales</a></li>
                <li><a href="{{ route('consejos.dietaVariada') }}" class="text-blue-600 hover:underline">Consejo 5: Varía tu Dieta</a></li>
            </ul>
        </aside>
    </div>

    <!-- Sección de consejos adicionales -->
    <div class="mt-10 p-6 bg-green-100 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-green-700 mb-4">Consejos para Cocinar en Casa</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-semibold text-green-600 mb-2">Planifica tus comidas</h3>
                <p class="text-lg text-gray-700">Dedica un tiempo para organizar las comidas de la semana. Esto te ahorrará tiempo y te ayudará a evitar decisiones impulsivas.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-green-600 mb-2">Prepara ingredientes con anticipación</h3>
                <p class="text-lg text-gray-700">Lava, corta y almacena tus vegetales con tiempo para que estén listos cuando los necesites. Esto hace que la cocina diaria sea mucho más rápida.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-green-600 mb-2">Cocina en grandes cantidades</h3>
                <p class="text-lg text-gray-700">Preparar porciones más grandes te permitirá tener comidas listas para varios días, lo que te ahorrará tiempo y esfuerzo.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-green-600 mb-2">Usa especias naturales</h3>
                <p class="text-lg text-gray-700">En lugar de usar salsas procesadas, experimenta con especias y hierbas frescas para darle sabor a tus comidas de manera saludable.</p>
            </div>
        </div>
    </div>

    <!-- Sección de llamada a la acción -->
    <div class="mt-10 text-center">
        <p class="text-xl font-semibold text-gray-800">¡Comienza hoy a preparar comidas deliciosas y saludables en casa!</p>
        <a href="{{ route('recetas') }}" class="mt-4 inline-block bg-green-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-500">Descubre recetas caseras</a>
    </div>
@endsection