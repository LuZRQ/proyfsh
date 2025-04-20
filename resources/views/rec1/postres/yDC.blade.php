@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', ' Yogur a la Cúrcuma 🍶🌿')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/yogur-dorado-a-la-curcuma.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Yogur Dorado a la Cúrcuma</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Una de las preparaciones más fáciles que está triunfando entre los amantes de la cúrcuma es el yogur natural con una cucharadita de aceite de coco, otra de cúrcuma en polvo y de pimienta negra molida.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: RBA
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
                    <i class="bi bi-clock icon"></i> Tiempo: 10' + 1h de reposo
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Yogur de anacardos <span>3 tazas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de coco, de primera presión en frío <span>1 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cúrcuma en polvo <span>1 cucharadita</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pimienta negra molida <span>1/2 cucharadita</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Dátiles <span>2 unidades</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Introduce todos los ingredientes en una batidora y mézclalo todo hasta obtener una crema suave.
                    </li>
                    <li data-number="2">
                        Reparte la mezcla obtenida en cuatro vasitos de vidrio con tapa y deja reposar en la nevera durante una hora, para que adquiera una textura aún más cremosa.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
