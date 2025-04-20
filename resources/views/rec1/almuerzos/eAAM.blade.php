@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', ' Ensalada de Arroz con Atún y Maíz 🍚🌽 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/ensalada-de-arroz-con-atun-huevo.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Ensalada de Arroz con Atún, Huevo y Maíz</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Ensalada de aprovechamiento, rica, sabrosa y nutritiva. Perfecta para llevar al trabajo.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 8
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 10'
                </span>
            </div>
            <br>
            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-outline-secondary me-3" id="decrease">-</button>
                <span id="portionCount" class="mx-2">1</span> Porciones
                <button class="ms-3 btn btn-outline-secondary" id="increase">+</button>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes frescos</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/zanahoria.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Zanahoria <span id="zanahoria">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/huevo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Huevo <span id="huevo">1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/pimiento_rojo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Pimiento Rojo <span id="pimientoRojo">1/4 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/perejil.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Perejil <span id="perejil">1/2 pizca</span>
                    </li>
                </ul>
                <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/atún_en_conserva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Atún En Conserva <span id="atunConserva">1/2 lata grande</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/maíz.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Maíz <span id="maíz">1/4 lata pequeña</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/arroz.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Arroz <span id="arroz">60 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_oliva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite De Oliva <span id="aceiteOliva">1/2 cucharadita</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Cuece los huevos en abundante agua hirviendo durante 10 minutos a partir de que el agua comience a hervir. Saca, refresca con agua fría y pela.
                    </li>
                    <li data-number="2">
                        Pela y corta en cuadrados pequeños la zanahoria.
                    </li>
                    <li data-number="3">
                        Corta el pimiento rojo en tiras y pásalas por la sartén en un poquito de aceite y con un poco de sal.
                    </li>
                    <li data-number="4">
                        En tu ensaladera coloca el arroz, el atún escurrido de su lata, el maíz, los huevos cortados en trozos, los trozos de zanahoria y las tiras de pimiento.
                    </li>
                    <li data-number="5">
                        Termina esparciendo un poquito de perejil cortado.
                    </li>
                    <li data-number="6">
                        Aliña con aceite, vinagre y sal y ¡lista!
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Nosotros cocimos los huevos en freidora de aire. Es muy fácil. Colócalos sobre la rejilla y programa 12 minutos a 120ºC.
                    <br>
                    Si te gustan los sabores fuertes, puedes poner el pimiento rojo crudo en la ensalada, sin necesidad de pasarlo previamente por la sartén.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection