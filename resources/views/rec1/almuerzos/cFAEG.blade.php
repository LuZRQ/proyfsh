@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', ' Canelones Fríos de Atún y Guisantes 🥶🐟 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/canelones-frios-con-atun-en-escabeche-y-guisantes.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Canelones Fríos con Atún en Escabeche y Guisantes</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Esta receta de pasta con legumbres y atún se prepara en solo 20 minutos y, al ser fría, puedes dejarla hecha el día de antes y guardarla en la nevera. Ideal para una comida rápida y deliciosa.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 7
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 20'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Placas para lasaña <span>8 láminas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Alubias blancas cocidas <span>150 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Atún en escabeche <span>160 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Guisantes congelados <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Hojas de lechuga <span>Al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Zanahorias <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Ramitas de perejil <span>2 unidades</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Cuece las placas para lasaña en una olla con agua y un poco de sal. Escúrrelas y extiéndelas sobre un paño limpio.
                    </li>
                    <li data-number="2">
                        Pela y corta en dados pequeños las zanahorias. Cuece las zanahorias junto con los guisantes en agua con sal durante 6-7 minutos y luego escurre.
                    </li>
                    <li data-number="3">
                        Escurre el escabeche del atún, desmenúzalo y resérvalo. Enjuaga las alubias blancas y mézclalas con las verduras cocidas, el atún y la lechuga cortada en juliana.
                    </li>
                    <li data-number="4">
                        Reparte la mezcla en las láminas de lasaña y enróllalas para formar los canelones.
                    </li>
                    <li data-number="5">
                        Para servir, rocía los canelones con un poco del escabeche sobrante y espolvorea perejil picado.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Para un plato más ligero, puedes sustituir las alubias por tomate en daditos.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection