@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', '🌮🍳Tacos de Huevos con Tomate y Aguacate🍅🥑')
@section('back_url', route('desayunos'))
@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/TacosHuevoRevueltTomatoAguacate.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Tacos de Huevos Revueltos con Tomate y Aguacate</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “¡Menuda pintaza tienen estos tacos de huevos revueltos acompañados de aguacate y tomate! Un desayuno súper nutritivo con el que afrontar el día o la cena perfecta para cuando llegues cansado a casa.”
                </p>
            </div>
        </div>

        <div class="col-8 text-center mt-4">
            <div class="d-flex ">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0 " style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">Equipo Sweet Home</p>
            </div>
            <br>
        </div>
    </div>
    <br> 
    <div class="row justify-content-center cud">
        <!-- Ingredientes y pasos -->
        <div class="col-8">
            <div class="d-flex justify-content-between mb-3  p-2 rounded caj">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 6
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 15'
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
                        <img src="{{ asset('imgIngredient/aguacate.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aguacate <span id="aguacate">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/huevo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Huevo <span id="huevo">2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/tomate.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Tomate <span id="tomate">1/4 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/queso_feta.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Queso Feta <span id="quesoFeta">10 gramos</span>
                    </li>
                </ul>
            <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/tortilla_de_maíz.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Tortilla De Maíz <span id="tortillaMaíz">2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_oliva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite De Oliva <span id="aceiteOliva">1/2 cucharadita</span>
                    </li>
                </ul>

            <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
            <ul class="custom-list">
                <li data-number="1">
                    Corta el tomate en trozos pequeños y el aguacate en rodajas.
                </li>
                <li data-number="2">
                    Bate los huevos y cocínalos en una sartén con un poco de sal. Cuando comiencen a cuajar, con una pala de madera, revuelve. Retíralos a un plato.
                </li>
                <li data-number="3">
                    Coloca una tortilla y encima de ella coloca otra (es probable que se rompa la primera). Rellena con la mitad de los huevos revueltos, añade el tomate y aguacate. Termina esparciendo un poco de queso por encima y, opcionalmente, añade albahaca picada y un poco de pimienta. ¡A disfrutar!
                </li>
            </ul>

            <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                Trucos y Consejos
            </h4>
            <p class="bg-light p-3 rounded">
              ¡Decora a tu gusto!  
            </p>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection