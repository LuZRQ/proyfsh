@extends('layouts.app3')
@section('title','Consejos')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style03.css') }}" />
@endsection
@section('back_url', route('consejos'))
@section('header_title', '¡Come variado, cuida tu salud! 🌈💪')

@section('content')
<section class="text-center mb-10">
        <h2 class="text-4xl font-bold mb-4 text-green-700">Varía tu Dieta</h2>
        <p class="text-lg text-gray-600">
            No te limites a un solo tipo de comida. Una dieta variada es clave para obtener todos los nutrientes que tu cuerpo necesita.
        </p>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        <div class="bg-green-50 shadow-md rounded-lg p-6">
            <h3 class="text-2xl font-semibold text-green-600 mb-4">Por qué es Importante</h3>
            <p class="text-gray-700 mb-4">
                Variar tu dieta te ayuda a acceder a diferentes nutrientes, previene deficiencias y mejora tu salud general.
            </p>
            <img src="{{ asset('img/dietavaried.png') }}" alt="Comidas variadas" class="w-full h-45 object-cover rounded-lg mb-4">
            <ul class="list-disc list-inside text-gray-700">
                <li>Obtención de vitaminas y minerales diversos.</li>
                <li>Mejora del sistema inmunológico.</li>
                <li>Reducción del riesgo de enfermedades crónicas.</li>
            </ul>
        </div>
        
        <div class="bg-green-50 shadow-md rounded-lg p-6">
            <h3 class="text-2xl font-semibold text-green-600 mb-4">Consejos Prácticos</h3>
            <p class="text-gray-700 mb-4">
                Implementar variedad en tu dieta es fácil. Aquí algunos consejos prácticos:
            </p>
            <img src="{{ asset('img/consalud.jpg') }}" alt="Consejos de alimentación" class="w-full h-45 object-cover rounded-lg mb-4">
            <ul class="list-disc list-inside text-gray-700">
                <li>Incorpora frutas y verduras de colores diferentes.</li>
                <li>Alterna entre proteínas: carne, pescado, legumbres.</li>
                <li>Prueba nuevos granos como quinoa o amaranto.</li>
            </ul>
        </div>
        
        <div class="bg-green-50 shadow-md rounded-lg p-6">
            <h3 class="text-2xl font-semibold text-green-600 mb-4">Recetas Sugeridas</h3>
            <p class="text-gray-700 mb-4">
                Aquí te dejamos algunas recetas que pueden ayudarte a diversificar tus comidas:
            </p>
            <img src="{{ asset('img/recetsalud.png') }}" alt="Recetas saludables" class="w-full h-45 object-cover rounded-lg mb-4">
            <ul class="list-disc list-inside text-gray-700">
                <li>Ensalada colorida con aderezo de yogur.</li>
                <li>Quinoa con verduras asadas y hierbas frescas.</li>
                <li>Sopa de lentejas con espinacas y zanahorias.</li>
            </ul>
        </div>
    </div>
    <br>

    <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Consejos</h2>
        <ul class="list-disc list-inside text-gray-800">
            <li><a href="{{ route('consejos.comeVerduras') }}" class="text-blue-600 hover:underline">Consejo 1: Come Más Frutas y Verduras</a></li>
            <li><a href="{{ route('consejos.ejercicio') }}" class="text-blue-600 hover:underline">Consejo 2: Incluye Ejercicio Regular</a></li>
            <li><a href="{{ route('consejos.bebeAgua') }}" class="text-blue-600 hover:underline">Consejo 3: Bebe Suficiente Agua</a></li>
            <li><a href="{{ route('consejos.productosNaturales') }}" class="text-blue-600 hover:underline">Consejo 4: Opta por Ingredientes Naturales</a></li>
            <li><a href="{{ route('consejos.comidaCasera') }}" class="text-blue-600 hover:underline">Consejo 5: Elige Comidas Caseras</a></li>
        </ul>
    </aside>

    <footer class="text-center mt-10">
        <p class="text-gray-700">
            Recuerda, una alimentación variada es fundamental para tu bienestar. ¡Explora nuevos sabores y disfruta de cada bocado!
        </p>
    </footer>
@endsection