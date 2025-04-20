@extends('layouts.app2')

@section('title','Bebidas')
@section('back_url', route('bebidas'))
@section('header_title', 'Licuado de Manzana y Canela 🍎🌿 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/licuadomanzanacanela.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Licuado de Manzana y Canela</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Aprovecha tus frutas de temporada y prepara para tus desayunos un práctico LICUADO de MANZANA CANELA hecho con colágeno. ¡Te encantará!”
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
                        2 Tazas de leche, descremada <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1/2 Cucharadita de Canela molida <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        2 Manzanas verdes, sin semilla <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        4 Cucharadas de Péptidos de Colágeno en Polvo VITAL PROTEINS® Sin Sabor <span></span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">¡A cocinar!</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Licúa el Péptidos de Colágeno en Polvo VITAL PROTEINS® Sin Sabor con las manzanas, la canela y la leche.
                    </li>
                    <li data-number="2">
                        Sirve en vasos.
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
                    La manzana es fuente de fibra.
                </p>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/nutrition.png') }}" alt="Información Nutricional" class="me-2" style="width: 50px; height: 50px;">
                    Información Nutricional
                </h4>
                <p class="bg-light p-3 rounded">
                    226.1 kcal = 946 kj / por porción
                </p>
                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/advice.png') }}" alt="Consejo Culinario" class="me-2" style="width: 50px; height: 50px;">
                    Consejo Culinario
                </h4>
                <p class="bg-light p-3 rounded">
                    Agrega a la mezcla 1 taza de hielos y vuélvelo frappé.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection