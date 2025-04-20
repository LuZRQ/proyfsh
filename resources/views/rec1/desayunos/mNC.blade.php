@extends('layouts.app2')

@section('title','Desayunos')
@section('header_title', '🧁 Magdalenas de Naranja y Chocolate 🍊🍫 ')
@section('back_url', route('desayunos'))
@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/MagdalenasNaranjaChocolate.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Magdalenas de Naranja y Chocolate</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Las magdalenas del supermercado van a pasar a la historia cuando pruebes a hacer estas casera, porque no vas a querer otras. ¡Mañana para desayunar magdalenas caseras!”
                </p>
            </div>
        </div>
        <div class="col-8 text-center mt-4">
            <div class="d-flex ">
                <img src="{{ asset('img/iconogroup.png') }}" alt="Autor" class="me-2" style="width: 50px; height: 50px;">
                <p class="mb-0 " style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 19px;">Equipo Sweet Home</p>
            </div>
            <br>
        </div>
    </div>
    <br>
    <div class="row justify-content-center cud">
        <!-- Ingredientes y pasos -->
        <div class="col-8">
            <div class="d-flex justify-content-between mb-3  p-2 rounded caj">
                <span class="icon-container">
                    <i class="bi bi-basket icon"></i> Ingredientes: 7
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Baja
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 30'
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
                        <img src="{{ asset('imgIngredient/naranja.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Naranja <span id="naranja">1/4 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/huevo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Huevo <span id="huevo">1/2 unidad</span>
                    </li>
                </ul>
                <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_oliva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite De Oliva <span id="aceiteOliva">25 mililitros</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/harina_de_trigo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Harina De Trigo <span id="harinaTrigo">37 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/levadura.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Levadura <span id="levadura">3 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/chocolate_negro.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Chocolate Negro <span id="chocolateNegro">3 gramos</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/azúcar.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Azúcar<span id="azucar">25 gramos</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Precalienta el horno a 200ºC.
                    </li>
                    <li data-number="2">
                        Ralla la piel de media naranja y exprime su jugo.
                    </li>
                    <li data-number="3">
                        En un recipiente mezcla la harina, la levadura y la ralladura de media naranja.
                    </li>
                    <li data-number="4">
                        En otro vierte los huevo, el zumo de media naranja y el azúcar, y bate muy bien durante un par de minutos. Añade el aceite y sigue batiendo durante un minuto.
                    </li>
                    <li data-number="5">
                        Incorpora la mezcla líquida a la seca (la harina, etc.) y mezcla todo muy bien de manera que queden bien integrados los ingredientes y sin grumos. Añade las pepitas de chocolate y con ayuda de una espátula, mezcla.
                    </li>
                    <li data-number="6">
                        Engrasa los moldes de magdalenas que vas a emplear y ve rellenándolos. No los llenes hasta arriba porque la masa subirá y se te saldrá, con rellenar 3/4 de los mismos será suficiente.
                    </li>
                    <li data-number="7">
                        Hornea unos 15 minutos (hasta que al pincharlas con un cuchillo, éste salga seco). Deja que se enfríen y ¡listas!
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    ¡Decora a tu gusto!
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection