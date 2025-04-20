@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', 'Flan Frutal 🥭🍮 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/flan-frutal.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Flan Frutal</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Un postre saludable y rico es la mezcla de fruta con flan. Además, es un postre que pueden comer también los veganos, así que no tendrás problemas con ninguno de tus invitados.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 6
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Fácil
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 10'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Alga agar-agar <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Agua <span>100 mililitros</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Naranjas <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sirope de manzana <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Tofu <span>150 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Kiwis <span>3 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Granada (opcional) <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Hierve 2 cucharadas de agar-agar en polvo en unos 100 ml de agua durante 5 minutos, para disolverlo. Añade el zumo de 2 naranjas, 2 cucharadas de sirope de manzana y 150 g de tofu aplastado con un tenedor.
                    </li>
                    <li data-number="2">
                        Vierte la mezcla en 3 vasitos, añade 3 kiwis cortados a rodajas y coloca alguna arriba para decorar. Deja reposar una hora, hasta que cuaje. Para crear contraste, puedes salpicarlas con granada.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
