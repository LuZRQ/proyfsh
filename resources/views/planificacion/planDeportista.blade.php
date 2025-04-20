@extends('layouts.app3')
@section('title','Plan')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style04.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/planstyle.css') }}" />
@endsection
@section('back_url', route('planificacion'))
@section('header_title', 'Mejora tu rendimiento 🏃‍♀️🏋️')

@section('content')
<main class="container mx-auto px-4 py-10 bg-purple-50 rounded-lg shadow-lg">
    <h2 class="text-4xl font-bold text-purple-800 text-center mb-5">Plan de Comidas para Deportistas</h2>
    <p class="text-gray-700 text-lg text-center mb-8">
        Un plan de comidas diseñado para apoyar a los deportistas en su rendimiento y recuperación. Este plan está enfocado en proporcionar los nutrientes necesarios para maximizar la energía y la recuperación muscular.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Desayuno -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Desayuno</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Avena con proteína:</strong> Cocinada con leche, plátano y una cucharada de proteína en polvo, ideal para comenzar el día con energía.</li>
                    <li><strong>Batido de frutas:</strong> Mezcla de bayas, espinacas, yogur griego y leche de almendra, perfecta para una rápida recuperación.</li>
                    <li><strong>Tostadas integrales con aguacate:</strong> Ricas en grasas saludables y energía sostenida para tus entrenamientos.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Añadir semillas de chía o lino a tus desayunos aumenta el contenido de fibra y omega-3.
                </p>
            </div>
        </div>

        <!-- Almuerzo -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Almuerzo</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Quinoa con verduras:</strong> Ensalada de quinoa con espinacas, tomates cherry, aguacate y garbanzos, rica en proteínas y fibra.</li>
                    <li><strong>Pechuga de pollo a la parrilla:</strong> Servida con arroz integral y brócoli, ideal para una comida completa y equilibrada.</li>
                    <li><strong>Wrap de pavo:</strong> En tortilla integral con lechuga, tomate y hummus, fácil de llevar y lleno de nutrientes.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Incluye siempre una fuente de proteína magra en tu almuerzo para maximizar la recuperación muscular.
                </p>
            </div>
        </div>

        <!-- Cena -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Cena</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Salmón al horno:</strong> Rico en omega-3, servido con espárragos y puré de patatas.</li>
                    <li><strong>Pasta integral con verduras:</strong> Mezclada con aceite de oliva, ajo y tus verduras favoritas, una cena ligera y nutritiva.</li>
                    <li><strong>Ensalada de garbanzos:</strong> Con cebolla roja, pimientos y aderezo de yogur, excelente para una cena refrescante.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Evita las comidas pesadas antes de dormir; opta por opciones más ligeras que faciliten la digestión.
                </p>
            </div>
        </div>

        <!-- Snack -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Snack</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Barritas de proteínas:</strong> Hechas en casa con avena, mantequilla de almendra y miel.</li>
                    <li><strong>Yogur griego:</strong> Con frutas frescas y nueces, excelente para un snack post-entrenamiento.</li>
                    <li><strong>Batido de plátano y espinacas:</strong> Energizante y lleno de nutrientes, ideal para después del ejercicio.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Siempre ten snacks saludables a mano para evitar opciones menos nutritivas.
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
            <li><a href="{{ route('plan.planFamily') }}" class="text-blue-600 hover:underline">Plan 5: Plan de Comidas para Familia</a></li>
        </ul>
    </aside>

    <!-- Sugerencias adicionales -->
    <div class="mt-10 p-5 bg-white rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold text-purple-700 mb-4">Sugerencias Adicionales</h3>
        <p class="text-gray-700 mb-2">- Hidrátate adecuadamente antes, durante y después del ejercicio para mejorar el rendimiento.</p>
        <p class="text-gray-700 mb-2">- Consulta a un nutricionista para ajustar el plan según tus necesidades específicas y objetivos.</p>
        <p class="text-gray-700 mb-2">- Asegúrate de incluir carbohidratos complejos en tu dieta para mantener altos niveles de energía.</p>
        <p class="text-gray-700">- Escucha a tu cuerpo y ajusta la ingesta de alimentos según la intensidad de tu actividad física.</p>
    </div>
</main>
@endsection