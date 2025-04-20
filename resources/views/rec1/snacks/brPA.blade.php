@extends('layouts.app2')

@section('title','Snacks')
@section('back_url', route('snacks'))
@section('header_title', 'Brownies de Papa 🍫🥔 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/brownies-de-papa.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Brownies de Papa</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Los brownies de papa son un snack saludable debido a que la papa es un ingrediente que aporta diversos nutrientes, es rica en vitaminas C y B6, contiene fibra y potasio. Por otro lado, los brownies de papa no contienen harina refinada ni azúcares añadidos, lo que los hace una opción más saludable que los brownies tradicionales. Conoce nuestra receta de brownies de papa.”
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
                    <i class="bi bi-clock icon"></i> Tiempo: 25'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Papas/Patatas <span>250 gr</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal marina <span>2 cucharaditas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cacao 70% <span>70 gr</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Mantequilla ghee <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Papelón o endulzante de su preferencia <span>200 gr</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Almendras peladas o nueces <span>300 gr</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Huevos <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Vainilla sin gluten <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Cacao en polvo <span>4 cucharadas</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Preparación</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Hierve, haz un puré con las papas/patatas y añade la sal marina.
                    </li>
                    <li data-number="2">
                        Precalienta el horno a 180°C.
                    </li>
                    <li data-number="3">
                        Derrite el cacao 70% con mantequilla y papelón a baño de maría.
                    </li>
                    <li data-number="4">
                        Tritura las almendras o nueces y mezcla con el puré de papa/patata.
                    </li>
                    <li data-number="5">
                        Añade el huevo, la vainilla, cacao en polvo y por último el cacao derretido.
                    </li>
                    <li data-number="6">
                        Hornea por 25 minutos a 180°C. (Nota: Corregí el error de temperatura de 300°C a 180°C, ya que 300°C es demasiado alto para hornear.)
                    </li>
                    <li data-number="7">
                        Retira, deja enfriar y corta en cuadritos.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection