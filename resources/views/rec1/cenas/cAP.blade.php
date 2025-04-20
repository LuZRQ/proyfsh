@extends('layouts.app2')

@section('title','Cenas')
@section('back_url', route('cenas'))
@section('header_title', 'Conejo Asado con Patatas 🐇🥔 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/cenas-sanas-patatas-conejo-asados.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Conejo Asado con Patatas</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Un plato clásico y delicioso que destaca por su sabor y su presentación.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 10
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Media
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
                        Conejo troceado <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Ajo <span>4 dientes</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Champiñones <span>250 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Patatas de guarnición <span>400 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cebolla <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Romero <span>4 ramitas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pimentón <span>al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pimienta <span>al gusto</span>
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
                        Precalienta el horno a 180ºC. Lava bien las patatas y cuécelas con piel en abundante agua salada durante 25 minutos.
                    </li>
                    <li data-number="2">
                        Escúrrelas, y cuando estén templadas, pélalas. Pela y pica la cebolla en juliana.
                    </li>
                    <li data-number="3">
                        Lava los trozos de conejo, sécalos con papel de cocina y úntalos con una mezcla de sal, pimienta, pimentón y aceite de oliva. Hornéalo durante 10 minutos junto con la cebolla.
                    </li>
                    <li data-number="4">
                        Saca el conejo del horno, mueve las piezas y vuelve a hornear durante 10 minutos más.
                    </li>
                    <li data-number="5">
                        Mientras tanto, lava los champiñones, agrégales a la fuente de horno junto con el conejo y las patatas, y prosigue con la cocción durante 6 minutos.
                    </li>
                    <li data-number="6">
                        Pela y pica los ajos finamente. Pica 2 ramitas de romero y mézclalo con el ajo, dos cucharadas de aceite de oliva y una pizca de sal.
                    </li>
                    <li data-number="7">
                        Retira la fuente del horno y baña las piezas de conejo, las patatas y los champiñones con los jugos de la cocción.
                    </li>
                    <li data-number="8">
                        Añade el ajo y el romero a la fuente, remueve y vuelve a hornear 4 minutos para que el ajo se dore. Decora con unas ramitas de romero antes de servir.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Asegúrate de que el conejo esté bien dorado para realzar su sabor y acompáñalo con una ensalada fresca.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection