@extends('layouts.app2')

@section('title','Bebidas')
@section('back_url', route('bebidas'))
@section('header_title', ' Horchata de Manzana 🍏✨')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/HorchataManzana.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Horchata de Manzana</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Prepara en casa esta deliciosa HORCHATA DE MANZANA, la clave es toda la cremosidad que le da CARNATION® CLAVEL® Polvo. Será la favorita de tu familia.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: Mariana Ortega
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 8
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 15'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1/2 Taza de Alimento en Polvo a Base de Leche con Grasa Vegetal NESTLÉ® CARNATION® CLAVEL® <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Lata de Leche Condensada LA LECHERA® <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Taza de arroz, cocido <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        4 Tazas de agua <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Raja de canela <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        1 Manzana verde, cortada en cuartos <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        3 Tazas de hielo <span></span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        3/4 Taza de manzana verde, cortada en cubos <span></span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">¡A cocinar!</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Licúa el Alimento en Polvo a Base de Leche con Grasa Vegetal NESTLÉ® CARNATION® CLAVEL®, la Leche Condensada LA LECHERA®, el arroz, la mitad del agua, la canela y 1 manzana; cuela.
                    </li>
                    <li data-number="2">
                        Vierte lo que licuaste en una jarra con el resto del agua, los hielos y los cubos de manzana; mezcla.
                    </li>
                    <li data-number="3">
                        Ofrece.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Consejos" class="me-2" style="width: 50px; height: 50px;">
                    Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Prefiere consumir la manzana con cáscara para incrementar tu aporte de fibra.
                </p>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/nutrition.png') }}" alt="Información Nutricional" class="me-2" style="width: 50px; height: 50px;">
                    Información Nutricional
                </h4>
                <p class="bg-light p-3 rounded">
                    570.7 kcal = 2,389 kj / por porción
                </p>
                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/advice.png') }}" alt="Consejo Culinario" class="me-2" style="width: 50px; height: 50px;">
                    Consejo Culinario
                </h4>
                <p class="bg-light p-3 rounded">
                    Al cortar la manzana, recuerda mantenerla en un recipiente con agua, esto ayudará a retrasar la oxidación hasta su uso.
                </p>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/tip.png') }}" alt="Tip" class="me-2" style="width: 50px; height: 50px;">
                    TIP
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes sustituir la manzana por pera.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection