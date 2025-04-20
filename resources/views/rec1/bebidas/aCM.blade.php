@extends('layouts.app2')

@section('title','Bebidas')
@section('back_url', route('bebidas'))
@section('header_title', 'Agua Cremosa de Mango 🥭✨ ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/aguamango.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Agua Cremosa de Mango</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Esta receta no puede faltar en tu menú del día. Prepara esta receta de AGUA CREMOSA de MANGO hecha con CARNATION® CLAVEL® POLVO ¡Te encantará!”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: Abraham Gómez N
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
                    <i class="bi bi-clock icon"></i> Tiempo: 5'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1/2 Taza de Alimento en Polvo CARNATION® CLAVEL® <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Bolsa de Leche Condensada LA LECHERA® (209 g) <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        500 Gramos de mango (su pulpa) <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        4 Tazas de agua <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        2 Tazas de hielo <span></span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">¡A cocinar!</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Licúa el Alimento en Polvo CARNATION® CLAVEL® con la Leche Condensada LA LECHERA®, el mango y el agua.
                    </li>
                    <li data-number="2">
                        Sirve el agua en una jarra con hielos.
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
                    Puedes escarchar el vaso con un poco de amaranto.
                </p>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/nutrition.png') }}" alt="Información Nutricional" class="me-2" style="width: 50px; height: 50px;">
                    Información Nutricional
                </h4>
                <p class="bg-light p-3 rounded">
                    200.6 kcal = 841 kj / por porción
                </p>
                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/advice.png') }}" alt="Consejo Culinario" class="me-2" style="width: 50px; height: 50px;">
                    Consejo Culinario
                </h4>
                <p class="bg-light p-3 rounded">
                    El mango es un alimento con un gran contenido de nutrimentos, consúmelo fresco en su temporada.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection