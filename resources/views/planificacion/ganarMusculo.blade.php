@extends('layouts.app3')
@section('title','Plan')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style04.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/planstyle.css') }}" />
@endsection
@section('back_url', route('planificacion'))
@section('header_title', 'Ganemos masa muscular 💪🍗')

@section('content')
<main class="container mx-auto px-4 py-10 bg-purple-50 rounded-lg shadow-lg">
<h2 class="text-4xl font-bold text-purple-800 text-center mb-5">Plan de Comidas para Ganar Músculo</h2>
    <p class="text-gray-700 text-lg text-center mb-8">
        Un plan de comidas ideal para quienes buscan ganar masa muscular de manera efectiva. Este plan está diseñado para proporcionarte los nutrientes necesarios para construir músculo y mejorar tu rendimiento físico.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Desayuno -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Desayuno</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Omelette de claras de huevo:</strong> Prepara un omelette con claras de huevo, espinacas y queso feta para obtener proteínas y vegetales.</li>
                    <li><strong>Batido de proteínas:</strong> Mezcla proteínas en polvo con plátano, mantequilla de maní y leche de almendra para un desayuno energizante.</li>
                    <li><strong>Tostada integral con aguacate:</strong> Añade rodajas de aguacate y un poco de sal y pimienta para un desayuno saludable lleno de grasas buenas.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Incluye fuentes de proteínas en cada comida para maximizar la ganancia muscular.
                </p>
            </div>
        </div>

        <!-- Almuerzo -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Almuerzo</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Pechuga de pollo a la parrilla:</strong> Acompañada de quinua y brócoli al vapor para una comida rica en proteínas y nutrientes.</li>
                    <li><strong>Ensalada de garbanzos:</strong> Mezcla garbanzos, tomates cherry, pepino y aderezo de yogur para una comida fresca y llena de proteínas.</li>
                    <li><strong>Salmón al horno:</strong> Servido con espárragos y arroz integral para obtener omega-3 y carbohidratos complejos.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Elige siempre carnes magras y fuentes de proteína vegetal para diversificar tus comidas.
                </p>
            </div>
        </div>

        <!-- Cena -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Cena</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Tacos de pavo:</strong> Preparados con carne de pavo magra, aguacate, lechuga y salsa de yogur.</li>
                    <li><strong>Stir-fry de tofu:</strong> Con brócoli, pimientos y zanahorias para un platillo saludable y lleno de proteínas vegetales.</li>
                    <li><strong>Filete de ternera:</strong> Cocido a la parrilla y servido con puré de batatas y ensalada de espinacas.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Mantén las porciones adecuadas y evita los alimentos procesados para lograr mejores resultados.
                </p>
            </div>
        </div>

        <!-- Snack -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Snack</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Frutos secos:</strong> Un puñado de almendras o nueces para un snack saludable y lleno de energía.</li>
                    <li><strong>Yogur griego:</strong> Ideal para un snack rico en proteínas y calcio.</li>
                    <li><strong>Batido de frutas:</strong> Mezcla frutas y espinacas con agua o leche para un refrescante y nutritivo snack.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Incorpora snacks saludables entre las comidas para mantener tus niveles de energía.
                </p>
            </div>
        </div>
    </div>

    <br>
    <aside class="md:col-span-1 bg-blue-200 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Planes</h2>
        <ul class="list-disc list-inside text-gray-800">
            <li><a href="{{ route('plan.planPrincipiante') }}" class="text-blue-600 hover:underline">Plan 1: Plan de Comidas para Principiantes</a></li>
            <li><a href="{{ route('plan.perdidaPeso') }}" class="text-blue-600 hover:underline">Plan 2: Plan de Comidas para la Pérdida de Peso</a></li>
            <li><a href="{{ route('plan.planVegano') }}" class="text-blue-600 hover:underline">Plan 3: Plan de Comidas Vegano</a></li>
            <li><a href="{{ route('plan.planFamily') }}" class="text-blue-600 hover:underline">Plan 4: Plan de Comidas para Familia</a></li>
            <li><a href="{{ route('plan.planDeportista') }}" class="text-blue-600 hover:underline">Plan 5: Plan de Comidas para Deportistas</a></li>
        </ul>
    </aside>

    <!-- Sugerencias adicionales -->
    <div class="mt-10 p-5 bg-white rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold text-purple-700 mb-4">Sugerencias Adicionales</h3>
        <p class="text-gray-700 mb-2">- Asegúrate de beber suficiente agua durante el día para mantenerte hidratado.</p>
        <p class="text-gray-700 mb-2">- Incorpora ejercicios de fuerza en tu rutina para potenciar tus resultados.</p>
        <p class="text-gray-700 mb-2">- Planifica tus comidas con antelación para evitar decisiones impulsivas.</p>
        <p class="text-gray-700">- Mantén un registro de tus progresos para motivarte y ajustar tu dieta según sea necesario.</p>
    </div>

    </main>
@endsection