@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', 'Crema de Judías y Gambas 🥣🍤 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/crema-de-judias-verdes-con-gambas.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Crema de Judías Verdes con Gambas</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Una cena saludable y deliciosa con el sabor fresco de las judías verdes y el toque especial de las gambas.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Equipo Sweet Home
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 6
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Media
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 30'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Judías verdes <span>500 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cebolla <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Patatas <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Gambas <span>8 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pimientas variadas <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava las judías, despúntalas y trocéalas. Pela las patatas y córtalas en cuartos. Pela y corta la cebolla en juliana.
                    </li>
                    <li data-number="2">
                        Rehoga la cebolla en una olla con una cucharada de aceite de oliva caliente a fuego medio, sin dejar que tome color.
                    </li>
                    <li data-number="3">
                        Incorpora las judías y las patatas, cúbrelas con ½ litro de agua, añade una cucharadita de sal y cuece durante 25 minutos. Retira del fuego y tritura.
                    </li>
                    <li data-number="4">
                        Pela las gambas y sofríe las cabezas y cáscaras con dos cucharadas de aceite de oliva durante 4 minutos. Agrega ½ vaso de agua y cuece 5 minutos más. Cuela el caldo y cuece el jugo 2 minutos más.
                    </li>
                    <li data-number="5">
                        Saltea las gambas y sirve la crema bien caliente, decorando con las gambas y el jugo de sus cabezas.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Para un toque más intenso en el jugo de gambas, añade un chorrito de brandy o vino rancio y deja que el alcohol se evapore antes de agregar el agua.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection