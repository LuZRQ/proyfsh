@extends('layouts.app2')

@section('title','Snacks')
@section('back_url', route('snacks'))
@section('header_title', 'Apple Crumble sin gluten 🍎✨ ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/apple-crumble-saludable.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Apple Crumble sin gluten y sin azúcar refinada</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Utilizando manzanas verdes como base, se rellenan con una mezcla crujiente de frutos secos mixtos, canela y un toque de miel para endulzar. El resultado es un postre aromático y sabroso, con la dulzura natural de la miel y el crujiente de los frutos secos. Conoce esta receta de Apple Crumble para 2 personas saludable, sencilla y rápida.”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">
                    Creado por: Natalie Luis (@healthynotfit)
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
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Manzana verde <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Frutos secos mixtos <span>1/3 de taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Canela <span>1 cucharadita</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Miel <span>1 cucharada</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Preparación</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Procesa todos los ingredientes, excepto la miel. No dejes que se vuelvan un polvo, sino que aún tengan trocitos que lo hagan más crujiente al hornearse.
                    </li>
                    <li data-number="2">
                        Mezcla con la miel y reserva.
                    </li>
                    <li data-number="3">
                        Lava la manzana, pícala por la mitad, remueve el corazón y haz un “huequito” donde puedas colocar la mayor parte de la mezcla de frutos secos.
                    </li>
                    <li data-number="4">
                        Coloca en una bandeja de horno, cubre con papel aluminio y hornea durante 20 minutos a 150℃.
                    </li>
                    <li data-number="5">
                        Los primeros 10 minutos mantenlo cubierto con el aluminio.
                    </li>
                    <li data-number="6">
                        Quita el aluminio y hornea durante 10 minutos más (¡Cuidado, no dejes que se quemen! Dependiendo de tu horno, puede tomar menos tiempo).
                    </li>
                    <li data-number="7">
                        Sirve mientras todavía esté caliente.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
