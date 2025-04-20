@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', 'Bombones de Chocolate, Fresa y Kiwi 🍫🥝 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/bombones-de-fresa-y-kiwi-con-chocolate.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Bombones de Fresa y Kiwi con Chocolate</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Las fresas son pura vitamina C, y el kiwi contiene mucha fibra. Si además le añadimos un poco de chocolate, se consigue una potente fuente de magnesio. Pues bien, para que puedas disfrutar de todos estos beneficios en un solo postre, tienes que probar estos bombones.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 4
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 40'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes (para 8 personas)</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Fresas <span>200 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kiwis <span>3 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Chocolate negro fondant <span>100 g</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Chocolate blanco fondant (opcional) <span>40 g</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava y seca las fresas y retírales las hojas. Pela los kiwis y córtalos en 4 gajos.
                    </li>
                    <li data-number="2">
                        Funde el chocolate negro al baño María, sin dejar de remover.
                    </li>
                    <li data-number="3">
                        Pincha las frutas con un palillo y sumérgelas en el chocolate hasta la mitad de su altura. Coloca sobre papel de hornear y reserva en la nevera.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
