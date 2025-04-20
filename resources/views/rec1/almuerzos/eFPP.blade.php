@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', ' Ensalada de Pasta y Pavo 🍝🦃 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/ensalada-fresca-de-pasta-con-pavo.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Ensalada Fresca de Pasta con Pavo</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Idea de tupper para llevar a la oficina o a la universidad, sin necesidad de invertir mucho a la cocina. Se prepara en poquito tiempo y es facilísima, ¡para principiantes!”
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
                        <img src="{{ asset('imgIngredient/pechuga_de_pavo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Pechuga De Pavo <span id="pechugaPavo">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/zanahoria.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Zanahoria <span id="zanahoria">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/tomate_cherry.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Tomate Cherry <span id="tomateCherry">3 unidades</span>
                    </li>
                </ul>
                <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/pasta.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Pasta <span id="pasta">75 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/maíz.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Maíz <span id="maíz">1/4 lata pequeña</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceituna.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceituna <span id="aceituna">1/2 puñado</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_oliva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite De Oliva <span id="aceiteOliva">1/2 cucharada</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Cuece la pasta en abundante agua hirviendo el tiempo que indique su paquete. Una vez cocida, cuélala y reserva.
                    </li>
                    <li data-number="2">
                        Coloca la pechuga de pavo sobre una tabla y córtala en dados tamaño medio. Echa unas gotitas de aceite de oliva en una sartén y saltea los trozos de pavo hasta que estén bien cocinados. Échales un poco de sal.
                    </li>
                    <li data-number="3">
                        Pela y ralla la zanahoria y lava y corta en mitades los tomates cherry.
                    </li>
                    <li data-number="4">
                        En tu ensaladera vierte la pasta cocida, añade los trozos de pavo, la zanahoria rallada, los tomates cherry, el maíz escurrido de su lata y unas cuantas aceitunas. Mezcla y sirve.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Esta ensalada puedes aliñarla sencillamente con aceite, vinagre y sal, y te quedará de maravilla.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection