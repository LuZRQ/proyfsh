@extends('layouts.app3')
@section('title','Plan')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style04.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/planstyle.css') }}" />
    
@endsection
@section('back_url', route('planificacion'))
@section('header_title', 'Vive sano, con sabor y conciencia 🌱🥗')

@section('content')
<main class="container mx-auto px-4 py-10 bg-purple-50 rounded-lg shadow-lg">
    <h2 class="text-4xl font-bold text-purple-800 text-center mb-5">Plan de Comidas Vegano</h2>
    <p class="text-gray-700 text-lg text-center mb-8">
        Un plan de comidas completo para aquellos que siguen una dieta vegana. Este plan incluye una variedad de alimentos que no solo son nutritivos, sino también deliciosos y satisfactorios.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Desayuno -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Desayuno</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Porridge de avena:</strong> Cocinado con leche de almendra y cubierto con frutas frescas y semillas de chía para un desayuno lleno de fibra y energía.</li>
                    <li><strong>Tofu revuelto:</strong> Un sustituto perfecto del huevo, preparado con cúrcuma, espinacas y tomate.</li>
                    <li><strong>Batido verde:</strong> Mezcla espinacas, plátano, leche de coco y una cucharada de mantequilla de almendra para un comienzo saludable.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Añade superalimentos como la espirulina o el cacao en polvo para aumentar el valor nutricional de tus desayunos.
                </p>
            </div>
        </div>

        <!-- Almuerzo -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Almuerzo</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Ensalada de quinoa:</strong> Mezclada con garbanzos, aguacate, tomates cherry, y aderezo de limón y tahini.</li>
                    <li><strong>Sándwich de hummus:</strong> Con verduras frescas y pan integral, ideal para un almuerzo ligero y nutritivo.</li>
                    <li><strong>Curry de lentejas:</strong> Preparado con leche de coco, espinacas y especias, servido con arroz integral.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Varía los tipos de legumbres en tus comidas para aprovechar diferentes nutrientes.
                </p>
            </div>
        </div>

        <!-- Cena -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Cena</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Wraps de lechuga:</strong> Rellenos de tofu marinado, verduras frescas y salsa de cacahuate.</li>
                    <li><strong>Pasta integral:</strong> Con salsa de tomate, champiñones y espinacas.</li>
                    <li><strong>Sopa de verduras:</strong> Con una mezcla de tus verduras favoritas y especias, perfecta para una cena ligera.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Asegúrate de incluir proteínas en cada comida para mantener un balance adecuado.
                </p>
            </div>
        </div>

        <!-- Snack -->
        <div class="p-5 rounded-lg card-background relative">
            <div class="card-content">
                <h3 class="text-3xl font-semibold text-purple-600 mb-2">Snack</h3>
                <ul class="list-disc pl-5 mb-4">
                    <li><strong>Papas al horno:</strong> Con especias y un poco de aceite de oliva, perfectas para un snack crujiente.</li>
                    <li><strong>Frutas frescas:</strong> Como manzanas, peras o plátanos, siempre una opción saludable.</li>
                    <li><strong>Barritas de granola caseras:</strong> Hechas con avena, frutos secos y miel o jarabe de agave.</li>
                </ul>
                <p class="text-purple-900 italic font-bold">
                    Consejo: Prepara tus snacks con anticipación para tener opciones saludables a la mano.
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
            <li><a href="{{ route('plan.planPrincipiante') }}" class="text-blue-600 hover:underline">Plan 4: Plan de Comidas para Principiantes</a></li>
            <li><a href="{{ route('plan.planDeportista') }}" class="text-blue-600 hover:underline">Plan 5: Plan de Comidas para Deportistas</a></li>
        </ul>
    </aside>

    <!-- Sugerencias adicionales -->
    <div class="mt-10 p-5 bg-white rounded-lg shadow-md">
        <h3 class="text-2xl font-semibold text-purple-700 mb-4">Sugerencias Adicionales</h3>
        <p class="text-gray-700 mb-2">- Explora diferentes tipos de granos, como el mijo o el farro, para variar tu dieta.</p>
        <p class="text-gray-700 mb-2">- Incorpora una variedad de colores en tus platos para obtener una gama amplia de nutrientes.</p>
        <p class="text-gray-700 mb-2">- Considera tomar suplementos de B12 y omega-3 para asegurar un aporte nutricional completo.</p>
        <p class="text-gray-700">- Mantente informado sobre las fuentes de proteína vegetal para alcanzar tus objetivos nutricionales.</p>
    </div>
</main>
@endsection