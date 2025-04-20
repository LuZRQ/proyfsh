@extends('layouts.app3')
@section('title','Blog')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/style05.css') }}" />
@endsection
@section('back_url', route('blog'))
@section('header_title', ' Inspira y conecta ✍️🌍')

@section('content')
<header class="text-center mb-10">
        <h1 class="text-5xl font-bold text-green-700 mb-4">Blog de Alimentación Saludable</h1>
        <p class="text-gray-600 text-lg">Consejos y artículos para mejorar tu alimentación día a día.</p>
    </header>

    <!-- Estructura de columna + post -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Nueva sección con imagen y texto -->
        <aside class="md:col-span-1 bg-green-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Consejos de Alimentación Saludable</h2>
            <div class="mb-4">
                <img src="{{ asset('img/fonddddd.png') }}" alt="Alimentación Saludable" class="w-full h-auto rounded-lg shadow-md" />
            </div>
            <p class="text-gray-700 mb-4"><strong>1. Varía tus alimentos:</strong> Incluir una amplia gama de alimentos en tu dieta asegura que obtienes todos los nutrientes necesarios. Prueba diferentes frutas y verduras, así como proteínas y granos enteros.</p>
            <p class="text-gray-700 mb-4"><strong>2. Hidratación adecuada:</strong> Beber suficiente agua es crucial para tu salud. La hidratación ayuda a la digestión y mantiene la piel sana. Intenta consumir al menos 8 vasos de agua al día.</p>
            <p class="text-gray-700 mb-4"><strong>3. Controla las porciones:</strong> Prestar atención al tamaño de las porciones puede ayudar a evitar el exceso de comida. Usar platos más pequeños puede ser una estrategia efectiva para comer menos sin sentir que te estás privando.</p>
            <p class="text-gray-700"><strong>4. Planea tus comidas:</strong> Dedicar tiempo a planificar tus comidas semanales puede ayudarte a tomar decisiones más saludables y evitar la tentación de elegir opciones menos nutritivas en el último minuto.</p>
        </aside>

        <!-- Entrada principal del blog -->
        <article class="md:col-span-2 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-green-800 mb-4">5 Beneficios de Comer Más Vegetales</h2>
            <p class="text-gray-700 text-lg mb-8">
                Descubre por qué incluir más vegetales en tu dieta puede mejorar tu salud de manera significativa. Comer vegetales no solo te ayuda a sentirte más enérgico, sino que también aporta nutrientes esenciales para el funcionamiento óptimo de tu cuerpo.
            </p>

            <!-- Imagen relacionada -->
            <div class="mb-6">
                <img src="{{ asset('img/verd.png') }}" class="w-full h-64 object-cover rounded-lg shadow-md" />
            </div>

            <!-- Beneficios enumerados -->
            <ul class="list-disc pl-6 space-y-4 text-gray-700">
                <li><strong>Mejora tu digestión:</strong> Los vegetales son ricos en fibra, lo que ayuda a mantener tu sistema digestivo funcionando correctamente.</li>
                <li><strong>Aumenta tu energía:</strong> Contienen carbohidratos complejos que se digieren lentamente, proporcionándote energía sostenida a lo largo del día.</li>
                <li><strong>Refuerza tu sistema inmunológico:</strong> Las vitaminas y antioxidantes presentes en los vegetales ayudan a fortalecer tus defensas.</li>
                <li><strong>Favorece la pérdida de peso:</strong> Son bajos en calorías pero ricos en nutrientes, lo que te ayuda a sentirte saciado sin excederte en calorías.</li>
                <li><strong>Reduce el riesgo de enfermedades crónicas:</strong> Su consumo regular está asociado a una menor incidencia de enfermedades cardiovasculares, diabetes tipo 2, y algunos tipos de cáncer.</li>
            </ul>

            <!-- Texto adicional para enriquecer el contenido -->
            <div class="mt-6">
                <h3 class="text-2xl font-semibold text-green-800 mb-2">Un Estilo de Vida Saludable</h3>
                <p class="text-gray-700 mb-4">
                    Incorporar vegetales en tus comidas no solo es beneficioso para tu salud física, sino que también puede mejorar tu bienestar mental. La variedad de sabores y texturas que ofrecen los vegetales puede hacer que tus platos sean más atractivos y placenteros. Intenta experimentar con diferentes recetas y métodos de cocción para disfrutar al máximo de estos alimentos nutritivos.
                </p>
            </div>

            <!-- Resumen con mucha información -->
            <div class="text-center mt-10">
                <h4 class="text-lg font-semibold text-gray-800">Resumen</h4>
                <p class="text-gray-600 mb-4">
                    Aumentar tu consumo de vegetales es una estrategia efectiva para mejorar tu salud general. Estos alimentos están cargados de nutrientes que son vitales para el funcionamiento óptimo de tu cuerpo. La fibra que aportan no solo facilita la digestión, sino que también contribuye a la salud del corazón al reducir los niveles de colesterol. Además, al ser bajos en calorías y altos en agua, los vegetales te ayudan a mantener un peso saludable y te hacen sentir saciado durante más tiempo.
                </p>
                <p class="text-gray-600 mb-4">
                    Los vegetales como las espinacas, el brócoli y las zanahorias son ricos en vitaminas A y C, que son antioxidantes poderosos. Incorporar una variedad de colores en tu plato no solo lo hace visualmente atractivo, sino que también asegura que estás obteniendo una amplia gama de nutrientes. Recuerda que cada pequeño cambio cuenta; añadir una porción extra de verduras a tus comidas puede marcar una gran diferencia en tu salud a largo plazo.
                </p>
                <p class="text-gray-600">
                    ¡Prueba a incluir más verduras en tus platos y disfruta de todos sus beneficios!
                </p>
            </div>
        </article>

        <!-- Nueva sección para enlaces a otros consejos -->
        <aside class="md:col-span-1 bg-yellow-200 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Otros Blogs</h2>
            <ul class="list-disc list-inside text-gray-800">
                <li><a href="{{ route('blog.planSem') }}" class="text-blue-600 hover:underline">Blog 1: Cómo Crear un Plan de Comidas Semanal</a></li>
                <li><a href="{{ route('blog.smothies') }}" class="text-blue-600 hover:underline">Blog 2: Los Mejores Smoothies para Desayunar</a></li>
                <li><a href="{{ route('blog.recuEner') }}" class="text-blue-600 hover:underline">Blog 3: Alimentos para Aumentar tu Energía</a></li>
                <li><a href="{{ route('blog.diSu') }}" class="text-blue-600 hover:underline">Blog 4: Beneficios de una Dieta Sin Azúcar</a></li>
                <li><a href="{{ route('blog.superAlimen') }}" class="text-blue-600 hover:underline">Blog 5: Superalimentos: Qué Son y Cómo Incluirlos en tu Dieta</a></li>
            </ul>
        </aside>
    </div>
@endsection