@extends('layouts.app3')
@section('title','Plan')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style04.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/planstyle.css') }}" />
@endsection
@section('back_url', route('planificacion'))
@section('header_title', 'Alcancemos un peso saludable 🌿⚖️')

@section('content')
<main class="container mx-auto px-4 py-10 bg-purple-50 rounded-lg shadow-lg">
    <h2 class="text-4xl font-bold text-purple-800 text-center mb-5">Plan de Comidas para la Pérdida de Peso</h2>
    <p class="text-gray-700 text-lg text-center mb-8">
        Un plan de comidas diseñado para ayudarte a perder peso de manera saludable. Este plan se enfoca en opciones nutritivas y balanceadas que no solo son bajas en calorías, sino que también son deliciosas.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Desayuno -->
        <div class="p-5 rounded-lg card-background card-shadow relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Desayuno</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Batido Verde:</strong> Mezcla espinacas, plátano, yogur griego y leche de almendra. Este batido es bajo en calorías y alto en nutrientes.</li>
                    <li><strong>Avena con Frutas:</strong> Preparada con agua o leche baja en grasa, añadiendo fresas o arándanos. Aporta fibra que ayuda a mantenerte saciado.</li>
                    <li><strong>Huevos Revueltos con Verduras:</strong> Utiliza claras de huevo y añade espinacas y tomates. Es una opción rica en proteínas y baja en calorías.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Mantén las porciones controladas y evita añadir azúcares innecesarios a tus desayunos.
                </p>
            </div>
        </div>

        <!-- Almuerzo -->
        <div class="p-5 rounded-lg card-background card-shadow relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Almuerzo</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Ensalada de Garbanzos:</strong> Mezcla garbanzos, pimientos, pepino y adereza con limón y aceite de oliva. Llena de fibra y proteínas.</li>
                    <li><strong>Pechuga de Pollo a la Parrilla:</strong> Acompañada de verduras al vapor. Una fuente magra de proteínas que te mantendrá saciado.</li>
                    <li><strong>Sopa de Verduras:</strong> Elige una sopa casera con verduras frescas y caldos bajos en sodio. Ideal para la saciedad sin muchas calorías.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Prepara tus comidas con anticipación para evitar tentaciones de última hora.
                </p>
            </div>
        </div>

        <!-- Cena -->
        <div class="p-5 rounded-lg card-background card-shadow relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Cena</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Filete de Salmón al Horno:</strong> Acompañado de espárragos asados. El salmón es rico en ácidos grasos omega-3, que son beneficiosos para la salud.</li>
                    <li><strong>Pasta Integral con Salsa de Tomate:</strong> Utiliza tomate fresco y albahaca para una opción baja en calorías.</li>
                    <li><strong>Wrap de Lechuga:</strong> Rellena hojas de lechuga con pavo, aguacate y vegetales. Es fresco y bajo en calorías.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Cena al menos 2 horas antes de acostarte para facilitar la digestión.
                </p>
            </div>
        </div>

        <!-- Snack -->
        <div class="p-5 rounded-lg card-background card-shadow relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Snacks Saludables</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Palitos de Verdura:</strong> Zanahorias, apio o pepinos, ideales para picar sin añadir muchas calorías.</li>
                    <li><strong>Frutos Secos:</strong> Un puñado de almendras o nueces es una gran opción para mantener la saciedad.</li>
                    <li><strong>Yogur Griego:</strong> Bajo en grasa y alto en proteínas, perfecto para un snack que te llenará.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Mantén tus snacks por debajo de las 150 calorías para ayudarte a controlar la ingesta total.
                </p>
            </div>
        </div>
    </div>

    <br>
    <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Planes</h2>
        <ul class="list-disc list-inside text-gray-800">
            <li><a href="{{ route('plan.planPrincipiante') }}" class="text-blue-600 hover:underline">Plan 1: Plan de Comidas para Principiantes</a></li>
            <li><a href="{{ route('plan.ganarMusculo') }}" class="text-blue-600 hover:underline">Plan 2: Plan de Comidas para Ganar Músculo</a></li>
            <li><a href="{{ route('plan.planVegano') }}" class="text-blue-600 hover:underline">Plan 3: Plan de Comidas Vegano</a></li>
            <li><a href="{{ route('plan.planFamily') }}" class="text-blue-600 hover:underline">Plan 4: Plan de Comidas para Familia</a></li>
            <li><a href="{{ route('plan.planDeportista') }}" class="text-blue-600 hover:underline">Plan 5: Plan de Comidas para Deportistas</a></li>
        </ul>
    </aside>

    <br>
    <div class="text-center mt-10">
        <p class="text-lg text-gray-700 mb-4 italic">
            Recuerda que la pérdida de peso es un proceso gradual. Sé constante y busca un equilibrio en tu dieta.
        </p>
    </div>
</main>
@endsection