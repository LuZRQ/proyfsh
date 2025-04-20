@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', 'Lemon Cookies 🍋🍪')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/lemoncookies.png') }}" alt="Lemon Cookies" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Lemon Cookies</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Seguro que no eres capaz de decir que no a estas galletas cargadas de sabor a limón riquísimas. ¿Te animas a prepararlas?”
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
            <div class="d-flex justify-content-between mb-3 bg-gray-200 p-2 rounded">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 7
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 20'
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
                        <img src="{{ asset('imgIngredient/huevo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Huevo <span id="huevo">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/zumo_de_limón.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Zumo de limón <span id="zumo-limon">10 mililitros</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/limón.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Limón <span id="limon">1/4 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/mantequilla.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Mantequilla <span id="mantequilla">20 gramos</span>
                    </li>
                </ul>
                <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/azúcar.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Azúcar <span id="azucar">33 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/harina_de_trigo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Harina de trigo <span id="harina-trigo">47 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/levadura.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Levadura <span id="levadura">1/4 cucharadita</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava un limón y ralla su piel.
                    </li>
                    <li data-number="2">
                        En un recipiente mezcla el azúcar, la ralladura del limón, la mantequilla derretida, los huevos y el zumo de limón. Bate bien durante un par de minutos hasta que te quede una mezcla uniforme.
                    </li>
                    <li data-number="3">
                        Añade la harina y la levadura, y vuelve a mezclar hasta obtener una masa sin grumos.
                    </li>
                    <li data-number="4">
                        Deja reposar la mezcla en la nevera alrededor de media hora.
                    </li>
                    <li data-number="5">
                        Pasado ese tiempo coge la masa y ve formando galletas. Colócalas en una bandeja engrasada apta para horno y hornea a 180ºC durante 15 minutos.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes añadir una cucharada de proteína vegetal natural o sabor vainilla y lograr un batido súper nutritivo. Recuerda que la piña ha de ser natural, aunque puedes hacer un apaño con piña de lata, ¡pero en su jugo!
                    Si quieres, una vez has dado forma de galleta a la masa, éstas puedes pasarlas por azúcar glass y meterlas al horno.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection