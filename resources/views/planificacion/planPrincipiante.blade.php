@extends('layouts.app3')
@section('title','Plan')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style04.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/planstyle.css') }}" />
@endsection
@section('back_url', route('planificacion'))
@section('header_title', 'Comienza hoy, vive saludable 🌟🍎')

@section('content')
<main class="container mx-auto px-4 py-10 bg-purple-50 rounded-lg shadow-lg">
    <h2 class="text-4xl font-bold text-purple-800 text-center mb-5">Plan de Comidas para Principiantes</h2>
    <p class="text-gray-700 text-lg text-center mb-8">
        Un plan de comidas fácil de seguir para aquellos que están comenzando con una dieta saludable. Este plan te ayudará a establecer hábitos alimenticios que fomenten una vida más saludable y equilibrada.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Desayuno -->
        <div class="p-5 rounded-lg card-background card-shadow relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Desayuno</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Avena cocida:</strong> Prepárala con leche o agua y añade frutas frescas (plátanos, fresas) y un puñado de nueces. Aporta fibra y energía para comenzar el día.</li>
                    <li><strong>Yogur natural:</strong> Combínalo con miel y granola. El yogur es una excelente fuente de probióticos que benefician la salud intestinal.</li>
                    <li><strong>Batido de plátano:</strong> Mezcla plátano, espinacas, y leche de almendra para un desayuno lleno de nutrientes y fácil de llevar.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Intenta variar los ingredientes de tus desayunos para no aburrirte y aprovechar diferentes nutrientes.
                </p>
            </div>
        </div>

        <!-- Almuerzo -->
        <div class="p-5 rounded-lg card-background card-shadow relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Almuerzo</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Ensalada de pollo a la parrilla:</strong> Mezcla pollo, verduras mixtas (espinacas, lechuga, tomate, pepino) y adereza con aceite de oliva y limón.</li>
                    <li><strong>Quinoa con verduras asadas:</strong> Una opción rica en proteínas y fibra. Puedes agregar garbanzos para un extra de proteínas.</li>
                    <li><strong>Sopa de lentejas:</strong> Llena de fibra y nutrientes. Puedes añadir espinacas y zanahorias para mejorar su sabor y nutrientes.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Prepárate la comida del día siguiente en la noche para ahorrar tiempo en la mañana.
                </p>
            </div>
        </div>

        <!-- Cena -->
        <div class="p-5 rounded-lg card-background card-shadow relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Cena</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Pescado al horno:</strong> Acompáñalo con brócoli al vapor. El pescado es rico en omega-3, mientras que el brócoli aporta fibra y vitaminas.</li>
                    <li><strong>Pasta integral:</strong> Combínala con salsa de tomate natural, ajo y albahaca para un plato delicioso y saludable.</li>
                    <li><strong>Wrap de pavo:</strong> Envuelve pavo, lechuga, tomate y aguacate en una tortilla integral. Es una opción rápida y nutritiva.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Intenta cenar al menos 2-3 horas antes de dormir para una mejor digestión.
                </p>
            </div>
        </div>

        <!-- Snack -->
        <div class="p-5 rounded-lg card-background card-shadow relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Snacks Saludables</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Frutas frescas:</strong> Elige manzanas, plátanos o bayas para una merienda saludable.</li>
                    <li><strong>Hummus:</strong> Combínalo con zanahorias y apio para un snack lleno de fibra.</li>
                    <li><strong>Nueces o almendras:</strong> Un puñado es ideal para mantener la saciedad entre comidas.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Mantén siempre a mano opciones saludables para evitar la tentación de snacks procesados.
                </p>
            </div>
        </div>
    </div>

    <br>
    <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Planes</h2>
        <ul class="list-disc list-inside text-gray-800">
            <li><a href="{{ route('plan.planFamily') }}" class="text-blue-600 hover:underline">Plan 1: Plan de Comidas para Familia</a></li>
            <li><a href="{{ route('plan.perdidaPeso') }}" class="text-blue-600 hover:underline">Plan 2: Plan de Comidas para la Pérdida de Peso</a></li>
            <li><a href="{{ route('plan.ganarMusculo') }}" class="text-blue-600 hover:underline">Plan 3: Plan de Comidas para Ganar Músculo</a></li>
            <li><a href="{{ route('plan.planVegano') }}" class="text-blue-600 hover:underline">Plan 4: Plan de Comidas Vegano</a></li>
            <li><a href="{{ route('plan.planDeportista') }}" class="text-blue-600 hover:underline">Plan 5: Plan de Comidas para Deportistas</a></li>
        </ul>
    </aside>

    <br>
    <div class="text-center mt-10">
        <p class="text-lg text-gray-700 mb-4 italic">
            Recuerda que un estilo de vida saludable incluye no solo comer bien, sino también mantenerte activo y descansar adecuadamente.
        </p>
    </div>
</main>
@endsection