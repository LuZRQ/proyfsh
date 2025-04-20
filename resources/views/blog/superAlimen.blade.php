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
        <h1 class="text-5xl font-bold text-green-800 mb-4">Superalimentos: Qué Son y Cómo Incluirlos en tu Dieta</h1>
        <p class="text-gray-600 text-lg">Descubre los alimentos que te pueden ayudar a mejorar tu salud y bienestar, y aprende a integrarlos en tus comidas diarias.</p>
    </header>

    <!-- Contenido principal -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Columna lateral (tips rápidos) -->
        <aside class="md:col-span-1 bg-green-100 p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-green-800 mb-6">Consejos para Incorporar Superalimentos</h2>
            <div class="mb-4">
                <img src="{{ asset('img/supera1.jpg') }}" alt="Superalimentos" class="w-full h-64 object-cover rounded-lg shadow-md" />
            </div>
            <p class="text-gray-700 mb-4"><strong>1. Desayuno nutritivo:</strong> Añade semillas de chía o lino a tu avena o yogurt para un comienzo saludable del día.</p>
            <p class="text-gray-700 mb-4"><strong>2. Sustituye los snacks:</strong> Cambia las papas fritas por un puñado de nueces o almendras para un snack lleno de nutrientes.</p>
            <p class="text-gray-700 mb-4"><strong>3. Ensaladas poderosas:</strong> Incorpora kale o espinaca a tus ensaladas para aumentar el contenido de vitaminas y antioxidantes.</p>
            <p class="text-gray-700"><strong>4. Smoothies energéticos:</strong> Prepara smoothies con espirulina, moringa o bayas de goji para un boost de energía natural.</p>
        </aside>

        <!-- Artículo principal del blog -->
        <article class="md:col-span-2 bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-4xl font-bold text-green-800 mb-4">¿Qué son los Superalimentos?</h2>
            <p class="text-gray-700 text-lg mb-8">
                Los superalimentos son aquellos alimentos ricos en nutrientes que ofrecen beneficios excepcionales para la salud. Son una excelente fuente de vitaminas, minerales, antioxidantes, y otros compuestos beneficiosos que pueden ayudar a prevenir enfermedades y mejorar el bienestar general.
            </p>

            <!-- Imagen relacionada -->
            <div class="mb-6">
                <img src="{{ asset('img/superrr.png') }}" class="w-full h-auto rounded-lg shadow-md" alt="Superalimentos en la dieta" />
            </div>

            <!-- Beneficios de los superalimentos -->
            <h3 class="text-3xl font-semibold text-green-800 mb-4">Beneficios de Incorporar Superalimentos</h3>
            <p class="text-gray-700 mb-6">
                Al incluir superalimentos en tu dieta regular, puedes experimentar una serie de beneficios, como la mejora en la salud digestiva, aumento de la energía, y fortalecimiento del sistema inmunológico. Algunos de los superalimentos más populares incluyen:
            </p>

            <!-- Lista de superalimentos -->
            <ul class="list-disc pl-6 mb-8 text-gray-700">
                <li><strong>Bayas de Goji:</strong> Son ricas en antioxidantes y vitamina C, ayudando a fortalecer el sistema inmunológico.</li>
                <li><strong>Kale:</strong> Alto en fibra y lleno de antioxidantes, ayuda a desintoxicar el cuerpo y mejorar la digestión.</li>
                <li><strong>Quinoa:</strong> Una proteína completa que es excelente para personas que siguen dietas vegetarianas o veganas.</li>
                <li><strong>Espirulina:</strong> Un alga cargada de proteínas, vitaminas y minerales esenciales.</li>
                <li><strong>Semillas de Chía:</strong> Ricas en ácidos grasos omega-3, fibra y antioxidantes.</li>
            </ul>

            <!-- Cómo integrar los superalimentos en el día a día -->
            <h3 class="text-3xl font-semibold text-green-800 mb-4">Cómo Incluir Superalimentos en tu Dieta</h3>
            <p class="text-gray-700 mb-6">
                Incorporar superalimentos en tu rutina diaria es más fácil de lo que piensas. Aquí te damos algunas ideas de cómo puedes añadir estos alimentos a tus comidas:
            </p>

            <!-- Sugerencias -->
            <div class="mb-6">
                <h4 class="text-2xl font-semibold text-green-800 mb-2">Desayunos:</h4>
                <p class="text-gray-700 mb-4">
                    Añade un puñado de bayas de goji a tu cereal o mézclalas en un smoothie junto con espirulina y plátano.
                </p>

                <h4 class="text-2xl font-semibold text-green-800 mb-2">Ensaladas:</h4>
                <p class="text-gray-700 mb-4">
                    Incorpora kale fresco en tus ensaladas, combinado con aguacate, quinoa, y un poco de semillas de chía para un toque crujiente.
                </p>

                <h4 class="text-2xl font-semibold text-green-800 mb-2">Postres:</h4>
                <p class="text-gray-700 mb-4">
                    Prepara postres saludables utilizando cacao crudo, bayas de acai y edulcorantes naturales como la miel o el sirope de agave.
                </p>
            </div>

            <!-- Conclusión -->
            <div class="text-center mt-10">
                <h4 class="text-lg font-semibold text-gray-800">Conclusión</h4>
                <p class="text-gray-600 mb-4">
                    Los superalimentos no son mágicos, pero su riqueza nutricional puede ser una gran adición a una dieta equilibrada. Experimenta añadiéndolos poco a poco en tus comidas diarias y comienza a disfrutar de sus beneficios.
                </p>
                <p class="text-gray-600">
                    Recuerda que una alimentación variada es clave para una salud óptima, y los superalimentos pueden ser parte importante de ella.
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
                <li><a href="{{ route('blog.smothies') }}" class="text-blue-600 hover:underline">Blog 5: Los Mejores Smoothies para Desayunar</a></li>
            </ul>
        </aside>
    </div>
</main>
@endsection