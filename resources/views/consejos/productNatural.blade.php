@extends('layouts.app3')
@section('title','Consejos')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style03.css') }}" />
@endsection
@section('back_url', route('consejos'))
@section('header_title', '¡Opta por ingredientes naturales! 🌿🍋')

@section('content')
<p class="text-lg mb-4 text-gray-700 text-center">
        Escoge alimentos frescos y naturales en lugar de procesados para una dieta más saludable. Incorporar ingredientes naturales en tu alimentación no solo mejora tu salud, sino que también enriquece tus comidas con sabores auténticos y nutrientes esenciales.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Sección del Consejo -->
        <article class="md:col-span-3 bg-white p-8 rounded-lg shadow-lg">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-semibold text-green-600 mb-2">Beneficios de los Ingredientes Naturales</h3>
                <ul class="list-disc list-inside">
                    <li class="mb-2">Mejora la salud digestiva gracias a la fibra.</li>
                    <li class="mb-2">Proporciona una variedad de vitaminas y minerales.</li>
                    <li class="mb-2">Reduce el riesgo de enfermedades crónicas.</li>
                    <li class="mb-2">Aumenta la energía y el bienestar general.</li>
                </ul>
            </div>
            <br>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-semibold text-green-600 mb-2">Ideas para Incorporar Ingredientes Naturales</h3>
                <p class="mb-4">
                    Aquí tienes algunas sugerencias para hacer más saludables tus comidas:
                </p>
                <ul class="list-disc list-inside">
                    <li class="mb-2">Utiliza verduras y frutas de temporada.</li>
                    <li class="mb-2">Elige granos enteros en lugar de refinados.</li>
                    <li class="mb-2">Incluye proteínas magras como pollo, pescado o legumbres.</li>
                    <li class="mb-2">Sustituye los aderezos procesados por aceite de oliva o yogur natural.</li>
                </ul>
            </div>

            <div class="mt-8 text-center">
                <img src="{{ asset('img/ingridientsaluda.png') }}" alt="Ingredientes Naturales" class="w-full h-64 object-cover rounded-lg shadow-md mb-4">
                <p class="text-sm text-gray-600 italic">¡Disfruta de los sabores frescos y naturales en tu cocina!</p>
            </div>
            <p class="text-gray-600">
                Recuerda que optar por ingredientes naturales no solo es beneficioso para tu salud, sino que también contribuye al bienestar del planeta. ¡Haz de cada comida una celebración de la naturaleza!
            </p>
        </article>

        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Consejos</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('consejos.comeVerduras') }}" class="text-blue-600 hover:underline">Consejo 1: Come Más Frutas y Verduras</a></li>
                <li><a href="{{ route('consejos.dietaVariada') }}" class="text-blue-600 hover:underline">Consejo 2: Varía tu Dieta</a></li>
                <li><a href="{{ route('consejos.bebeAgua') }}" class="text-blue-600 hover:underline">Consejo 3: Bebe Suficiente Agua</a></li>
                <li><a href="{{ route('consejos.ejercicio') }}" class="text-blue-600 hover:underline">Consejo 4: Incluye Ejercicio Regular</a></li>
                <li><a href="{{ route('consejos.comidaCasera') }}" class="text-blue-600 hover:underline">Consejo 5: Elige Comidas Caseras</a></li>
            </ul>
        </aside>
    </div>
@endsection