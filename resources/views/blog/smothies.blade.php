@extends('layouts.app3')
@section('title','Blog')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style05.css') }}" />
@endsection
@section('back_url', route('blog'))
@section('header_title', ' Inspira y conecta ✍️🌍')

@section('content')
<main class="container mx-auto py-10 px-6">
    <!-- Cabecera del blog -->
    <header class="text-center mb-10">
        <h1 class="text-5xl font-bold text-yellow-700 mb-4">Los Mejores Smoothies para Desayunar</h1>
        <p class="text-gray-600 text-lg">Recetas deliciosas y nutritivas para comenzar tu día con energía.</p>
    </header>

    <!-- Estructura de columna + post -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Nueva sección con imagen y texto -->
        <aside class="md:col-span-1 bg-yellow-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-yellow-800 mb-6">Consejos para Smoothies Saludables</h2>
            <div class="mb-4">
                <img src="{{ asset('img/smoothies1.png') }}" alt="Smoothies saludables" class="w-full h-64 object-cover rounded-lg shadow-md" />
            </div>
            <p class="text-gray-700 mb-4"><strong>1. Usa frutas frescas o congeladas:</strong> Aprovecha los beneficios de frutas como plátanos, fresas, y arándanos. Son ricas en vitaminas y antioxidantes.</p>
            <p class="text-gray-700 mb-4"><strong>2. Añade verduras:</strong> Espinacas o col rizada (kale) se integran fácilmente en smoothies y aportan una gran cantidad de fibra y micronutrientes.</p>
            <p class="text-gray-700 mb-4"><strong>3. Agrega proteínas:</strong> Incorpora yogur griego, proteína en polvo, o mantequilla de frutos secos para hacer tu smoothie más completo y saciante.</p>
            <p class="text-gray-700"><strong>4. Endulza naturalmente:</strong> Utiliza dátiles, miel o simplemente el dulzor natural de las frutas en lugar de azúcares añadidos.</p>
        </aside>

        <!-- Entrada principal del blog -->
        <article class="md:col-span-2 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-yellow-800 mb-4">Recetas Nutritivas para Comenzar el Día</h2>
            <p class="text-gray-700 text-lg mb-8">
                Los smoothies son una excelente opción para el desayuno porque son rápidos de preparar, deliciosos, y puedes llenarlos de ingredientes saludables que te mantendrán lleno y con energía durante toda la mañana. Aquí te compartimos algunas recetas que no solo son deliciosas, sino que también te aportarán los nutrientes que necesitas.
            </p>

            <!-- Imagen relacionada -->
            <div class="mb-6">
                <img src="{{ asset('img/smoothies2.png') }}" class="w-full h-64 object-cover rounded-lg shadow-md" alt="Recetas de smoothies" />
            </div>

            <!-- Recetas de smoothies -->
            <ul class="list-disc pl-6 space-y-4 text-gray-700">
                <li><strong>Smoothie de Frutas Tropicales:</strong> Mezcla mango, piña, plátano y un poco de coco rallado con leche de coco. Este smoothie es perfecto para una mañana refrescante y te transportará a una playa tropical.</li>
                <li><strong>Smoothie Verde Energizante:</strong> Combina espinacas, aguacate, manzana verde y un toque de jengibre fresco. Es una opción ideal para desintoxicar el cuerpo mientras obtienes energía natural.</li>
                <li><strong>Smoothie Proteico de Cacao:</strong> Licúa plátano, mantequilla de maní, cacao en polvo, leche de almendra y proteína en polvo. Este batido es perfecto para quienes buscan un desayuno más saciante.</li>
                <li><strong>Smoothie de Frutos Rojos y Chía:</strong> Mezcla fresas, frambuesas, arándanos, y una cucharada de semillas de chía. Es una explosión de antioxidantes y fibra, ideal para mantener tu piel y sistema inmunológico saludables.</li>
            </ul>

            <!-- Texto adicional para enriquecer el contenido -->
            <div class="mt-6">
                <h3 class="text-2xl font-semibold text-yellow-800 mb-2">Beneficios de los Smoothies</h3>
                <p class="text-gray-700 mb-4">
                    Incluir smoothies en tu dieta diaria puede ayudarte a consumir una mayor cantidad de frutas y verduras, además de ser una forma fácil de añadir proteínas, grasas saludables y otros nutrientes esenciales. Son una opción versátil y personalizable según tus necesidades y preferencias.
                </p>
                <p class="text-gray-700 mb-4">
                    Al preparar smoothies en casa, puedes controlar los ingredientes y evitar azúcares y aditivos no deseados. Además, ¡puedes experimentar con tus combinaciones favoritas!
                </p>
            </div>

            <!-- Resumen final -->
            <div class="text-center mt-10">
                <h4 class="text-lg font-semibold text-gray-800">Resumen</h4>
                <p class="text-gray-600 mb-4">
                    Los smoothies son una opción rápida y deliciosa para comenzar tu día de manera saludable. Ya sea que prefieras sabores tropicales, verdes o más dulces, hay un smoothie para cada gusto y necesidad. ¡Prueba estas recetas y disfruta de un desayuno lleno de energía!
                </p>
                <p class="text-gray-600 mb-4">
                    Añade tus ingredientes favoritos, ajusta las porciones y crea la receta perfecta para ti. ¡Empieza a disfrutar de smoothies nutritivos hoy mismo!
                </p>
                <p class="text-gray-600">
                    ¡Cambia tu desayuno y siente la diferencia en tu día!
                </p>
            </div>
        </article>

        <!-- Enlaces a otros blogs -->
        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Blogs</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('blog.diSu') }}" class="text-blue-600 hover:underline">Blog 1: Beneficios de una Dieta Sin Azúcar</a></li>
                <li><a href="{{ route('blog.recuEner') }}" class="text-blue-600 hover:underline">Blog 2: Alimentos para Aumentar tu Energía</a></li>
                <li><a href="{{ route('blog.planSem') }}" class="text-blue-600 hover:underline">Blog 3: Cómo Crear un Plan de Comidas Semanal</a></li>
                <li><a href="{{ route('blog.beCoVe') }}" class="text-blue-600 hover:underline">Blog 4: 5 Beneficios de Comer Más Vegetales</a></li>
                <li><a href="{{ route('blog.superAlimen') }}" class="text-blue-600 hover:underline">Blog 5: Superalimentos: Qué Son y Cómo Incluirlos en tu Dieta</a></li>
            </ul>
        </aside>
    </div>
</main>
@endsection