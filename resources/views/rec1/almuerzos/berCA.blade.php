@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', ' Berenjenas con Carne Asiática 🍆🍖 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/berenjenas-con-carne-estilo.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Berenjenas con Carne estilo Asiático</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Si te gusta la comida asiática, anímate a preparar estas berenjenas con carne. El aceite de sésamo, la soja y el jengibre rallado le dan ese sabor tan típico de oriente. Están deliciosas.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 10
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
                        <img src="{{ asset('imgIngredient/berenjena.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Berenjena <span id="berenjena">1/2 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/ajo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Ajo <span id="ajo">1 diente</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/carne_picada.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Carne Picada <span id="carnePicada">60 gramos</span>
                    </li>
                </ul>
                <br>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes de despensa</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/salsa_de_soja.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Salsa De Soja <span id="salsaSoja">1 1/4 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/agua.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Agua <span id="agua">1 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_sésamo.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite De Sésamo <span id="aceiteSesamo">1/2 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/jengibre.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Jengibre <span id="jengibre">1/2 pizca</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/aceite_de_oliva.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Aceite De Oliva <span id="aceiteOliva">1/2 cucharada</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/maicena.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Maicena <span id="maicena">3/4 cucharadita</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ asset('imgIngredient/arroz.jpg') }}" class="me-2" style="width: 40px; height: 40px;">
                        Arroz <span id="arroz">75 gramos</span>
                    </li>
                </ul>
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava y corta la berenjena en trozos alargados de 1 cm de grosor aproximadamente.
                    </li>
                    <li data-number="2">
                        Cocina las berenjenas al vapor o en el microondas. Si las cocinas en el microondas colócalas en un recipiente de silicona con un par de cucharadas de agua, y cocina a máxima potencia durante 3-4 minutos.
                    </li>
                    <li data-number="3">
                        En un recipiente vierte la salsa de soja, el jengibre rallado, el aceite de sésamo, el agua y la maicena.
                    </li>
                    <li data-number="4">
                        Pica finamente los ajos y sofríelos a fuego medio en una sartén con un poco de aceite de oliva. Cuando estén dorados, añade la carne picada y cocínala durante 3 minutos.
                    </li>
                    <li data-number="5">
                        A continuación añade las berenjenas, mézclalas con la carne, y continúa cocinando a fuego medio otros 4 minutos.
                    </li>
                    <li data-number="6">
                        Añade la salsa que habías preparado y deja que reduzca. Pasados 5-7 minutos sirve en un plato. Puedes acompañar el plato con un poco de arroz blanco.
                    </li>
                </ul>
                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Puedes acompañar con una bebida nutritiva.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection