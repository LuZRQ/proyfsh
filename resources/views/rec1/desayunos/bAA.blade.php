@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', '🥣🍌Bowl de Avena con Frutas 🫐🥜')
@section('back_url', route('desayunos'))
@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/bowlAvenaArandaPlatanCrem.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Bowl de Avena con Arándanos, Plátano y Crema de Cacahuete</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Te traemos el desayuno perfecto para llenarte de energía listo en menos de 15 minutos. Una combinación de sabores excelente.”        
                </p>
            </div>
        </div>

        <div class="col-8 text-center mt-4">
            <div class="d-flex">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">Equipo Sweet Home</p>
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
                        <img src="{{ asset('imgIngredient/plátano.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Plátano <span id="platano">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/arándano.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Arándano <span id="arandano">1 puñado</span>
                    </li>
                </ul>

                <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/crema_de_cacahuete.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Crema De Cacahuete <span id="cremaCacahuete">1 cucharadita</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/avena.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Avena <span id="avena">50 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/leche.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Leche <span id="leche">1/4 taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/agua.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Agua <span id="agua">1/4 taza</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/miel.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Miel <span id="miel">1 cucharadita</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        En un cazo vierte la leche, el agua, la avena y la miel. Cuece a fuego suave unos 5 minutos aproximadamente, hasta que logres una textura cremosa. Remueve con una cuchara de madera, de vez en cuando y si sientes que necesita un poco más de líquido añade un poco de agua o leche.
                    </li>
                    <li data-number="2">
                        Lava los arándanos y corta el plátano en rodajas.
                    </li>
                    <li data-number="3">
                        Sirve en dos tazones la avena cocida y coloca encima de ella arándanos y rodajas de plátano. Termina añadiendo una cucharadita de crema de cacahuete en cada tazón.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Nosotros hemos cocinado la avena con agua y leche pero puedes cocinarlas simplemente con agua, con leche o incluso con leche vegetal.
                    <br>
                    La crema de cacahuete puedes sustituirla por crema de anacardos.
                    <br>
                    Puedes añadir un poco de canela, le dará un sabor muy rico.
                    <br>
                    La miel puedes sustituirla por sirope de agave o por canela.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection