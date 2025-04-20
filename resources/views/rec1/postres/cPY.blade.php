@extends('layouts.app2')

@section('title','Postres')
@section('back_url', route('postres'))
@section('header_title', 'Carpaccio de Piña con Yogur 🍍🍶 ')

@section('content')
<div class="row justify-content-center">
        <!-- Imagen y descripción -->
        <div class="col-12 mx-auto text-center">
            <img src="{{ asset('imgRecetas/carpaccio-de-pina-con-yogur.png') }}" class="img-fluid rounded mx-auto d-block smo">
            <h2 class="mt-3 t" style="color: #49161f;">Carpaccio de Piña con Yogur</h2>
            <div class="box mx-auto mt-3 col-12 col-md-4">
                <p style="color: #270007;">
                    “El carpaccio es un plato que solo con su nombre ya queda bien. Así que si les dices a tus invitados que has preparado un carpaccio de piña con yogur que, además, solo tiene 171 kcal. Un postre saludable y muy apetecible.”
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
                    <i class="bi bi-clock icon"></i> Tiempo: 15'
                </span>
            </div>
            <br>
            <div class="col-12 justify-content-center">
                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Ingredientes (para 4 personas)</h4>
                <br>
                <ul id="ingredientsList" class="list-group mb-4">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Piña <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Yogures desnatados <span>2 unidades</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Limón <span>1 unidad</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Miel <span>2 cucharadas</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Menta fresca <span>al gusto</span>
                    </li>
                </ul>

                <h4 style="color: #49161f; font-family: 'Arial Narrow Bold', Impact; font-size: 21px;">Elaboración</h4>
                <ul class="custom-list">
                    <li data-number="1">
                        Pela la piña y córtala en rodajas muy finas con un cuchillo afilado. Si no te gusta la parte central porque lo encuentras duro, puedes descorazonarla, pero entonces le restarás nutrientes.
                    </li>
                    <li data-number="2">
                        Lava el limón frotando bien con un cepillo, seca la piel y ralla la capa amarilla con un rallador fino.
                    </li>
                    <li data-number="3">
                        Lava, seca y pica muy fino las hojas de menta fresca, mezcla con los yogures, la miel y la ralladura de limón, remueve bien para que quede uniforme.
                    </li>
                    <li data-number="4">
                        Coloca las láminas de piña en los platos con unas cucharadas de yogur por encima, espolvorea con hojitas de menta y un poco de ralladura de limón.
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('/js/script04.js') }}"></script>
@endsection
