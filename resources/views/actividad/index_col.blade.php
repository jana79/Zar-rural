@extends("layouts.layoutGral")

@section("infoGeneral")
<h1>Bienvenido a la sección de Actividades</h1>
<p class="text-center">Encuentra tu próximo plan.</p>

<div class="container row justify-content-md-center">
    @if(session('success'))
    <div class="col-12 col-md-6">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    @if (session('error'))
    <div class="col-sm-12 col-md-6">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif

</div>

<div class="row container mx-auto pt-3">
    <div class="col-12 col-md-6">
        <h3 class="text-center verde py-4">Naturaleza</h3>
        <a href="#">
            <img class=" img-fluid" src="{{asset('/images/cascada.jpg')}}"
                 alt="Naturaleza">
        </a>
    </div>
    <div class="col-12 col-md-6">
        <h3 class="text-center verde py-4">Patrimonio</h3>
        <a href="{{url('actividades/patrimonio')}}">
            <img class=" img-fluid" src="{{asset('/images/colegiata.jpg')}}"
                 alt="Patrimonio">
        </a>
    </div>
</div>

<div class="row container mx-auto pt-3 pb-5">
    <div class="col-12 col-md-6">
        <h3 class="text-center verde py-4">Ocio</h3>
        <a href="#">
            <img class=" img-fluid" src="{{asset('/images/museoVino.jpg')}}"
                 alt="Ocio">
        </a>
    </div>
    <div class="col-12 col-md-6">
        <h3 class="text-center verde py-4">Tradición</h3>
        <a href="#">
            <img class=" img-fluid" src="{{asset('/images/cipotegato.jpg')}}"
                 alt="Tradición">
        </a>
    </div>
</div>
<div class="col-12 d-flex justify-content-center pt-5">
    <div>
        <a href="{{route("actividad.create")}}"
           class="btn btn-verde">Añadir actividad</a>
    </div>
</div>

@endsection
