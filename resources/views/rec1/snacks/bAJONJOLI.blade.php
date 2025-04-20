@extends('layouts.app2')

@section('title','Snacks')
@section('back_url', route('snacks'))
@section('header_title', ' Barras de Ajonjolí 🥜🌾')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/barras-de-ajonjoli.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Barras de Ajonjolí o Sésamo</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Estas barras combinan el sabor tostado del ajonjolí con la dulzura natural de la miel y el toque frutal de las pasas. Además, lleva canela, que añade un aroma y sabor especiado que complementa perfectamente los demás ingredientes.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 5
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
                        Ajonjolí/Sésamo blanco <span>1 taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Canela <span>1 cucharadita</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal <span>1 pizca</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Miel <span>½ taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pasas <span>50 gramos</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Preparación</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Tuesta el ajonjolí/sésamo en el horno a 200 ºC, removiendo de vez en cuando, por 20 minutos aproximadamente o hasta que esté ligeramente doradito. Al término de ese tiempo, retira y reserva.
                    </li>
                    <li data-number="2">
                        Mientras, prepara a fuego moderado la miel, canela y sal, hasta que burbujee. Entonces, agrega el ajonjolí y las pasas, y mezcla hasta que quede homogénea.
                    </li>
                    <li data-number="3">
                        Retira y pon en una bandeja previamente preparada con papel parafinado o también se le puede colocar aceite en spray para que no se peguen las barras y sea fácil de sacar.
                    </li>
                    <li data-number="4">
                        Se reserva en el congelador hasta que agarre forma.
                    </li>
                    <li data-number="5">
                        Una vez compacta la mezcla, se pica de la forma que desees y puede guardarse en un envase de vidrio.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection