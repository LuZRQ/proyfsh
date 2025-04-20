@extends('layouts.app3')
@section('title','Blog')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style05.css') }}" />
@endsection
@section('back_url', route('blog'))
@section('header_title', ' Inspira y conecta ✍️🌍')
@section('content')
<header class="text-center mb-10">
        <h1 class="text-5xl font-bold text-blue-800 mb-4">Beneficios de una Dieta Sin Azúcar</h1>
        <p class="text-gray-600 text-lg">Explora cómo reducir el azúcar en tu dieta puede mejorar tu salud.</p>
    </header>

    <!-- Contenido principal con sección lateral y artículo -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Columna lateral (consejos rápidos) -->
        <aside class="md:col-span-1 bg-blue-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-blue-800 mb-6">Consejos para Reducir el Azúcar</h2>
            <div class="mb-4">
                <img src="{{ asset('img/sugar1.png') }}" alt="Reducir el azúcar" class="w-full h-64 object-cover rounded-lg shadow-md" />
            </div>
            <p class="text-gray-700 mb-4"><strong>1. Lee las etiquetas:</strong> Familiarízate con la información nutricional de los productos y presta atención al contenido de azúcares añadidos.</p>
            <p class="text-gray-700 mb-4"><strong>2. Reemplaza las bebidas azucaradas:</strong> Elige agua, té sin azúcar o infusiones en lugar de refrescos o jugos endulzados.</p>
            <p class="text-gray-700 mb-4"><strong>3. Opta por frutas enteras:</strong> En lugar de consumir postres azucarados, come frutas frescas que contienen azúcares naturales y fibra.</p>
            <p class="text-gray-700"><strong>4. Cocina en casa:</strong> Preparar tus propias comidas te permite controlar los ingredientes y reducir el uso de azúcares añadidos.</p>
        </aside>

        <!-- Artículo principal del blog -->
        <article class="md:col-span-2 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-blue-800 mb-4">Impacto Positivo de Reducir el Azúcar en tu Salud</h2>
            <p class="text-gray-700 text-lg mb-8">
                Reducir el consumo de azúcar añadido puede traer una gran cantidad de beneficios para la salud. El azúcar, especialmente en grandes cantidades, puede estar relacionado con una serie de problemas de salud como el aumento de peso, enfermedades del corazón, diabetes tipo 2 y más. A continuación, exploramos cómo una dieta sin azúcar puede mejorar tu bienestar físico y mental.
            </p>

            <!-- Imagen relacionada -->
            <div class="mb-6">
                <img src="{{ asset('img/sugar2.png') }}" class="w-full h-68 object-cover rounded-lg shadow-md" alt="Beneficios de una dieta sin azúcar" />
            </div>

            <!-- Beneficios detallados -->
            <h3 class="text-3xl font-semibold text-blue-800 mb-4">1. Control de Peso</h3>
            <p class="text-gray-700 mb-6">
                El azúcar añadido está lleno de calorías vacías que contribuyen al aumento de peso sin proporcionar nutrientes esenciales. Al reducir el azúcar en tu dieta, puedes controlar mejor tu peso, evitando picos de insulina y almacenamientos de grasa innecesarios.
            </p>

            <h3 class="text-3xl font-semibold text-blue-800 mb-4">2. Mejora en los Niveles de Energía</h3>
            <p class="text-gray-700 mb-6">
                Aunque el azúcar puede proporcionar un impulso rápido de energía, este suele ir seguido de una caída brusca. Al limitar el consumo de azúcar, puedes evitar estos "picos y caídas" y disfrutar de niveles de energía más estables y sostenidos a lo largo del día.
            </p>

            <h3 class="text-3xl font-semibold text-blue-800 mb-4">3. Mejora de la Salud Cardíaca</h3>
            <p class="text-gray-700 mb-6">
                El consumo excesivo de azúcar está relacionado con un mayor riesgo de enfermedades cardíacas debido a su impacto en los niveles de colesterol, presión arterial y triglicéridos. Al reducir el azúcar, puedes mejorar tu salud cardiovascular.
            </p>

            <h3 class="text-3xl font-semibold text-blue-800 mb-4">4. Mejora del Estado de Ánimo y Claridad Mental</h3>
            <p class="text-gray-700 mb-6">
                El azúcar puede afectar tu estado de ánimo al provocar altibajos emocionales debido a los cambios rápidos en los niveles de glucosa en la sangre. Las personas que reducen el azúcar suelen experimentar una mayor estabilidad emocional y una mejor concentración.
            </p>

            <!-- Tabla de comparación de azúcares naturales vs. añadidos -->
            <div class="mt-10">
                <h3 class="text-3xl font-semibold text-blue-800 mb-4">¿Qué es Mejor: Azúcar Natural vs. Azúcar Añadido?</h3>
                <table class="w-full table-auto bg-blue-50 text-gray-800 rounded-lg shadow-lg">
                    <thead>
                        <tr class="bg-blue-200 text-blue-900">
                            <th class="px-4 py-2">Tipo de Azúcar</th>
                            <th class="px-4 py-2">Fuente</th>
                            <th class="px-4 py-2">Beneficios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="border px-4 py-2">Azúcar Natural</td>
                            <td class="border px-4 py-2">Frutas, Verduras</td>
                            <td class="border px-4 py-2">Proporciona energía sostenida junto con fibra y nutrientes.</td>
                        </tr>
                        <tr class="text-center">
                            <td class="border px-4 py-2">Azúcar Añadido</td>
                            <td class="border px-4 py-2">Refrescos, Dulces, Postres</td>
                            <td class="border px-4 py-2">Aporta calorías vacías sin nutrientes esenciales, causando picos de azúcar.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Sección sobre el impacto en la piel -->
            <h3 class="text-3xl font-semibold text-blue-800 mt-8 mb-4">5. Mejora la Salud de tu Piel</h3>
            <p class="text-gray-700 mb-6">
                El exceso de azúcar en la dieta puede contribuir a problemas de piel como el acné y el envejecimiento prematuro. Al reducir su consumo, puedes notar una piel más clara, menos propensa a la inflamación y con una apariencia más juvenil.
            </p>

            <!-- Conclusión -->
            <div class="text-center mt-10">
                <h4 class="text-lg font-semibold text-gray-800">Conclusión</h4>
                <p class="text-gray-600 mb-4">
                    Reducir el consumo de azúcar puede tener un impacto significativo en tu salud general. Desde el control de peso y los niveles de energía hasta la salud mental y de la piel, una dieta sin azúcar puede ofrecer múltiples beneficios a largo plazo.
                </p>
                <p class="text-gray-600">
                    ¡Empieza poco a poco reduciendo el azúcar añadido y verás grandes mejoras en tu bienestar!
                </p>
            </div>
        </article>

        <!-- Enlaces a otros blogs -->
        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Blogs</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('blog.planSem') }}" class="text-blue-600 hover:underline">Blog 1: Cómo Crear un Plan de Comidas Semanal</a></li>
                <li><a href="{{ route('blog.smothies') }}" class="text-blue-600 hover:underline">Blog 2: Los Mejores Smoothies para Desayunar</a></li>
                <li><a href="{{ route('blog.recuEner') }}" class="text-blue-600 hover:underline">Blog 3: Alimentos para Aumentar tu Energía</a></li>
                <li><a href="{{ route('blog.beCoVe') }}" class="text-blue-600 hover:underline">Blog 4: 5 Beneficios de Comer Más Vegetales</a></li>
                <li><a href="{{ route('blog.superAlimen') }}" class="text-blue-600 hover:underline">Blog 5: Superalimentos: Qué Son y Cómo Incluirlos en tu Dieta</a></li>
            </ul>
        </aside>
    </div>
@endsection