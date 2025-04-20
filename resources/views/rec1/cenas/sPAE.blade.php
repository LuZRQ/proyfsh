@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', 'Sándwich de Pollo Asado 🥪🍗 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/sandwich-de-pollo-asado-con-ensalada.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Sándwich de Pollo Asado con Ensalada</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Un sándwich delicioso y saludable, perfecto para la cena, con el sabor del pollo asado y una ensalada fresca.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 9
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 45'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pan de molde sin corteza <span>8 rebanadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pechuga de pollo fileteada <span>600 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Lechuga <span>4 hojas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Mayonesa <span>3 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Mostaza <span>1 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Tomates cherry <span>12 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Hierbas provenzales <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Aceite de oliva <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal y pimienta <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Precalienta el horno a 180ºC. Lava los tomates, haz dos cortes en forma de cruz en la base y sazónalos. Sazona los filetes de pollo, espolvorea las hierbas y rocía con un poco de aceite de oliva.
                    </li>
                    <li data-number="2">
                        Hornea las pechugas durante 15 minutos. Pasado el tiempo, añade los tomates y hornea 10 minutos más.
                    </li>
                    <li data-number="3">
                        Prepara una salsa mezclando la mayonesa con la mostaza.
                    </li>
                    <li data-number="4">
                        Corta las rebanadas de pan a la mitad, úntalas con la salsa, coloca una hoja de lechuga, los filetes de pollo y los tomates.
                    </li>
                    <li data-number="5">
                        Cubre los sándwiches y sirve de inmediato.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Para un sabor más intenso, puedes marinar los filetes de pollo con las hierbas provenzales y un chorrito de limón antes de hornearlos.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection