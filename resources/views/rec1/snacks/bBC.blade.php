@extends('layouts.app2')

@section('title','Snacks')
@section('back_url', route('snacks'))
@section('header_title', ' Barritas de Banana 🍌🍫')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/barritas-de-cambur.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Barritas de Banana o Cambur</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Prepara un delicioso y saludable pan de quinoa y plátano, endulzado con estevia y con un toque de canela y cacao, perfecto para disfrutar en cualquier momento del día. Conoce nuestra receta de barritas de banana o cambur.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 8
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 15-20'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cacao en polvo <span>1 ½ cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Quinoa (previamente remojada 24 horas y lavada) <span>½ taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Harina de quinoa <span>½ taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Linaza <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Estevia <span>2 sobres</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Canela <span>1 cucharadita</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Huevos <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Bananas/Cambures <span>2 unidades</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Preparación</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Precalienta el horno a 180 °C.
                    </li>
                    <li data-number="2">
                        Mezcla la quinoa, la harina de quinoa, la canela, la linaza, el cacao y la estevia.
                    </li>
                    <li data-number="3">
                        Añade los huevos batidos y las bananas/cambures machacados.
                    </li>
                    <li data-number="4">
                        Mezcla bien.
                    </li>
                    <li data-number="5">
                        Vierte la mezcla en un molde refractario y hornea de 15 a 20 minutos y ¡listo!
                    </li>
                    <li data-number="6">
                        Nota: Como punto adicional podrías agregar 1 cucharadita de miel adicional y nueces trituradas.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection