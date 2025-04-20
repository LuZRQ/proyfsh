@extends('layouts.app3')
@section('title','Plan')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style04.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/planstyle.css') }}" />
@endsection
@section('back_url', route('planificacion'))
@section('header_title', 'Salud para todos en casa 👨‍👩‍👧‍👦🥗')

@section('content')
<main class="container mx-auto px-4 py-10 bg-purple-50 rounded-lg shadow-lg">
    <h2 class="text-4xl font-bold text-purple-800 text-center mb-5">Plan de Comidas para Familia</h2>
    <p class="text-gray-700 text-lg text-center mb-8">
        Planes de comidas para toda la familia, con recetas nutritivas y deliciosas. Este plan está diseñado para satisfacer los gustos de todos mientras mantiene una alimentación equilibrada.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Desayuno -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Desayuno</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Pancakes integrales:</strong> Servidos con miel y frutas frescas, ideales para un desayuno energético.</li>
                    <li><strong>Huevos revueltos:</strong> Preparados con espinacas y queso, una opción rica en proteínas.</li>
                    <li><strong>Batido de frutas:</strong> Con plátano, fresas y yogur, perfecto para toda la familia.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Involucra a los niños en la preparación de los pancakes para hacer la experiencia divertida.
                </p>
            </div>
        </div>

        <!-- Almuerzo -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Almuerzo</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Ensalada César:</strong> Con pollo a la parrilla, crutones y aderezo ligero, ideal para un almuerzo fresco.</li>
                    <li><strong>Tacos de pollo:</strong> Con verduras y salsa, para que cada miembro de la familia personalice su comida.</li>
                    <li><strong>Arroz integral:</strong> Con verduras salteadas y un toque de salsa de soja, un acompañamiento saludable.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Organiza una noche de tacos en familia donde cada uno elija sus ingredientes favoritos.
                </p>
            </div>
        </div>

        <!-- Cena -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Cena</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Pescado al horno:</strong> Con limón y hierbas, servido con una guarnición de puré de patatas.</li>
                    <li><strong>Pollo al curry:</strong> Con arroz y una mezcla de verduras, una cena reconfortante y sabrosa.</li>
                    <li><strong>Pizza casera:</strong> Con masa integral y tus ingredientes favoritos, ideal para una noche de películas.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Haz una noche de pizza donde todos puedan personalizar su propia porción.
                </p>
            </div>
        </div>

        <!-- Snack -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Snack</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Palomitas de maíz:</strong> Preparadas al aire, perfectas para un snack saludable.</li>
                    <li><strong>Frutas cortadas:</strong> Como manzanas y uvas, fáciles de llevar y muy nutritivas.</li>
                    <li><strong>Yogur con granola:</strong> Un snack delicioso y satisfactorio para cualquier momento del día.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Prepara porciones de frutas cortadas en la nevera para un snack rápido y saludable.
                </p>
            </div>
        </div>
    </div>

    <br>
    <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Planes</h2>
        <ul class="list-disc list-inside text-gray-800">
            <li><a href="{{ route('plan.planPrincipiante') }}" class="text-blue-600 hover:underline">Plan 1: Plan de Comidas para Principiantes</a></li>
            <li><a href="{{ route('plan.perdidaPeso') }}" class="text-blue-600 hover:underline">Plan 2: Plan de Comidas para la Pérdida de Peso</a></li>
            <li><a href="{{ route('plan.ganarMusculo') }}" class="text-blue-600 hover:underline">Plan 3: Plan de Comidas para Ganar Músculo</a></li>
            <li><a href="{{ route('plan.planVegano') }}" class="text-blue-600 hover:underline">Plan 4: Plan de Comidas Vegano</a></li>
            <li><a href="{{ route('plan.planDeportista') }}" class="text-blue-600 hover:underline">Plan 5: Plan de Comidas para Deportistas</a></li>
        </ul>
    </aside>

    <!-- Sugerencias adicionales -->
    <div class="mt-10 p-5 bg-white rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold text-purple-700 mb-4">Sugerencias Adicionales</h3>
        <p class="text-gray-700 mb-2">- Planifica las comidas de la semana para ahorrar tiempo y mantener una alimentación equilibrada.</p>
        <p class="text-gray-700 mb-2">- Haz que cada comida sea una oportunidad para aprender sobre nutrición y hábitos saludables.</p>
        <p class="text-gray-700 mb-2">- Introduce nuevas recetas cada semana para mantener el interés en la comida saludable.</p>
        <p class="text-gray-700">- Anima a los niños a elegir sus verduras favoritas para incluirlas en las comidas.</p>
    </div>
</main>
@endsection