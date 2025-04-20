@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', ' Brócoli Gratinado con Patata 🥦🧀')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/brocoli-gratinado.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Brócoli y Patata Gratinados</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Un acompañamiento delicioso y saludable que combina la suavidad del brócoli con la cremosidad de la bechamel.”
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
                    <i class="bi bi-clock icon"></i> Tiempo: 35'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Brócoli <span>200 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Patatas <span>200 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Harina <span>1 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Leche desnatada <span>500 ml</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Queso rallado <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Nuez moscada <span>al gusto</span>
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
                        Pela las patatas y cuécelas al vapor durante 15 o 20 minutos hasta que queden tiernas.
                    </li>
                    <li data-number="2">
                        Separa el brócoli en ramitas más pequeñas y escáldalas durante 2 minutos en agua hirviendo con sal.
                    </li>
                    <li data-number="3">
                        Precalienta el horno a 180ºC.
                    </li>
                    <li data-number="4">
                        Cuando tengas la patata y el brócoli cocidos, colócalos en una fuente para horno.
                    </li>
                    <li data-number="5">
                        Prepara la bechamel tostando la harina en una sartén con dos cucharadas de aceite de oliva.
                    </li>
                    <li data-number="6">
                        Añade poco a poco la leche sin dejar de mover y sazona la bechamel con nuez moscada y sal.
                    </li>
                    <li data-number="7">
                        Cubre las verduras con la bechamel, espolvorea con queso rallado y gratina durante 10 minutos.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes añadir un poco de jamón o tocino a la bechamel para darle un sabor más intenso.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
