@extends('layouts.app2')

@section('title','Bebidas')
@section('back_url', route('bebidas'))
@section('header_title', 'Smoothie de Avena y Chocolate 🍫🥣')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/smothieavenachocopla.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Smoothie de Avena con Chocolate y Plátano</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Complementa tus desayunos con este smoothie de avena con chocolate abuelita® reducido en azúcar y plátano. además de la cremosidad de carnation® clavel®.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: Abraham Gómez
                </p>
            </div>
            <br>
        </div>
    </div>
    <br>
    <div class="row justify-content-center cud">
        <!-- Ingredientes y pasos -->
        <div class="col-8">
            <div class="d-flex justify-content-between mb-3 p-2 rounded caj">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 5
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 4'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 lata de leche evaporada carnation® clavel® reducida en grasa* <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 plátano <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 taza de avena <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        2 tazas de hielo <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 tableta de chocolate para mesa abuelita® reducido en azúcar rallada (90 g) <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 plátano cortado en rodajas <span></span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">¡A cocinar!</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Licúa la leche evaporada carnation® clavel® reducida en grasa* con el plátano, la avena, los hielos y el chocolate para mesa abuelita® reducido en azúcar.
                    </li>
                    <li data-number="2">
                        Sirve el licuado en los vasos y decora con las rodajas de plátano.
                    </li>
                    <li data-number="3">
                        Disfruta.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Consejos" class="me-2" style="width: 50px; height: 50px;">
                    Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Enfría los vasos en el congelador 15 minutos antes de servir para conservar fría tu bebida por más tiempo.
                </p>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/nutrition.png') }}" alt="Información Nutricional" class="me-2" style="width: 50px; height: 50px;">
                    Información Nutricional
                </h4>
                <p class="bg-light p-3 rounded">
                    249.8 kcal = 1,046 kj / por porción
                </p>
                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/advice.png') }}" alt="Consejo Nutricional" class="me-2" style="width: 50px; height: 50px;">
                    Consejo Nutricional
                </h4>
                <p class="bg-light p-3 rounded">
                    La leche aporta calcio a tu dieta.
                </p>
                <p class="bg-light p-3 rounded">
                    *Comparada contra leche evaporada carnation® clavel® regular.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection