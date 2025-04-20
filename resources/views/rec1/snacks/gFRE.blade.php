@extends('layouts.app2')

@section('title','Snacks')
@section('back_url', route('snacks'))
@section('header_title', ' Gominolas de Fresa caseras 🍓🍬')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/gomitas-de-fresa.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Gomitas o Gominolas de Fresa Caseras y Sin Azúcar</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Prepara unos deliciosos y refrescantes postres de fresa con un toque cítrico, parecidos a las gomitas o gominolas, pero caseras, sin azúcar y mucho más saludables. Necesitarás jugo de limón, gelatina sin sabor y fresa. Descubre más detalles de la receta de gomitas saludables.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: Sweet Home
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 4
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 1 hora
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Zumo de limón <span>160 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Fresas (congeladas o frescas) <span>150 gramos (aproximadamente 1 taza)</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Gelatina sin sabor <span>4 cucharadas soperas</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Preparación</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        En una olla, añade el zumo de limón y las fresas, y calienta a fuego medio hasta que el líquido esté humeante.
                    </li>
                    <li data-number="2">
                        Bate la mezcla y deja que se enfríe un poco.
                    </li>
                    <li data-number="3">
                        Añade las 4 cucharadas de gelatina y vuelve a batir hasta que la mezcla se vuelva homogénea.
                    </li>
                    <li data-number="4">
                        Rellena tus moldes o bandeja con esta mezcla y refrigera durante aproximadamente una hora.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection