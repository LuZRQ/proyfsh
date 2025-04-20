@extends('layouts.app')

@section('title', 'Planes - Sweet Home')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style04.css') }}" />
@endsection

@section('content')
<div class="container mx-auto px-4 py-10 ">

<h4 class="text-3xl text-center font-bold mb-4" style="color: rgba(27, 1, 43, 0.527);">
        ¡Planifica tus Comidas de Manera Saludable!
    </h4>
    <!-- Plan de Comidas -->
    <section id="plan" class="mb-12">
        <h2 class="text-2xl font-semibold mb-4 text-center">Planes de Comidas Semanales</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Plan de Comidas 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Plan de Comidas para Principiantes</h3>
                <p class="text-gray-600 mb-4">Un plan de comidas fácil de seguir para aquellos que están comenzando con una dieta saludable.</p>
                <a href="{{ route('plan.planPrincipiante') }}" class="text-blue-500 hover:text-blue-700">Ver Plan</a>
            </div>
            <!-- Plan de Comidas 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Plan de Comidas para la Pérdida de Peso</h3>
                <p class="text-gray-600 mb-4">Un plan de comidas diseñado para ayudarte a perder peso de manera saludable.</p>
                <a href="{{ route('plan.perdidaPeso') }}" class="text-blue-500 hover:text-blue-700">Ver Plan</a>
            </div>
            <!-- Plan de Comidas 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Plan de Comidas para Ganar Músculo</h3>
                <p class="text-gray-600 mb-4">Un plan de comidas ideal para quienes buscan ganar masa muscular de manera efectiva.</p>
                <a href="{{ route('plan.ganarMusculo') }}" class="text-blue-500 hover:text-blue-700">Ver Plan</a>
            </div>
            <!-- Plan de Comidas 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Plan de Comidas Vegano</h3>
                <p class="text-gray-600 mb-4">Un plan de comidas completo para aquellos que siguen una dieta vegana.</p>
                <a href="{{ route('plan.planVegano') }}" class="text-blue-500 hover:text-blue-700">Ver Plan</a>
            </div>
            <!-- Plan de Comidas 5 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Plan de Comidas para Familia</h3>
                <p class="text-gray-600 mb-4">Planes de comidas para toda la familia, con recetas nutritivas y deliciosas.</p>
                <a href="{{ route('plan.planFamily') }}" class="text-blue-500 hover:text-blue-700">Ver Plan</a>
            </div>
            <!-- Plan de Comidas 6 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Plan de Comidas para Deportistas</h3>
                <p class="text-gray-600 mb-4">Un plan de comidas diseñado para apoyar a los deportistas en su rendimiento y recuperación.</p>
                <a href="{{ route('plan.planDeportista') }}" class="text-blue-500 hover:text-blue-700">Ver Plan</a>
            </div>
        </div>
    </section>
    </div>
@endsection