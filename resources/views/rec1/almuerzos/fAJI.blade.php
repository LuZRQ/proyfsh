@extends('layouts.app2')

@section('title','Desayunos')
@section('back_url', route('almuerzos'))
@section('header_title', ' Flores de Alcachofa con Jamón 🥬🍖 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/flores-de-alcachofas-con-jamon-iberico.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Flores de Alcachofas con Jamón Ibérico</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “Aunque las alcachofas con jamón ibérico sea un plato sencillo, lo más llamativo de este plato es su presentación ya que vamos a crear pequeñas flores comestibles.”
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
                    <i class="bi bi-basket icon"></i> Ingredientes: 4
                </span>
                <span class="icon-container">
                    <i class="bi bi-trophy icon"></i> Dificultad: Media
                </span>
                <span class="icon-container">
                    <i class="bi bi-clock icon"></i> Tiempo: 35'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Alcachofas <span>16 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Lonchas de jamón ibérico <span>16 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        AOVE <span>Al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Pimienta negra molida <span>Al gusto</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Sal <span>Al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Pasos</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Lava las alcachofas y cuécelas, sin pelar, durante 8-10 minutos. Luego, enfríalas en agua con hielo y escúrrelas. Retira las hojas más duras y corta los cogollos por la mitad.
                    </li>
                    <li data-number="2">
                        Abre cuidadosamente las hojas de las alcachofas y aplástalas ligeramente con las manos para aplanarlas.
                    </li>
                    <li data-number="3">
                        En una sartén caliente con AOVE, cocina las alcachofas bocabajo hasta que estén doradas y luego dales la vuelta. Colócalas en una fuente.
                    </li>
                    <li data-number="4">
                        Abre un poco las alcachofas por el corazón y coloca una loncha de jamón ibérico enrollada en forma de flor en el centro.
                    </li>
                </ul>

                <h4 class="mt-4 d-flex align-items-center" style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">
                    <img src="{{ asset('imgRecetas/light.png') }}" alt="Trucos" class="me-2" style="width: 50px; height: 50px;">
                    Trucos y Consejos
                </h4>
                <p class="bg-light p-3 rounded">
                    Para una cocción uniforme, coloca las alcachofas más grandes en la base de la olla y cúbrelas con agua. Así se mantendrán en su lugar durante la cocción.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection