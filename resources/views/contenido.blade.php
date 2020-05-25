@extends("layouts.layoutGral")


@section("infoGeneral")

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
<?php
if ($usuario->colaborador == 1) {
    $tipo = "Colaborador";
} else {
    $tipo = "Registrado";
}
?>
<h2 class="text-center">Contenido añadido por {{$usuario->name}}</h2>
<h4 class="text-center">Usuario {{$tipo}}</h4>
<div class="container mt-5 mb-5 shadow col-12 pl-5 pr-5">
    <table class="table">

        <thead>
            <tr>
                <th scope="col">Contenido</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($actividades))
            @foreach($actividades as $actividad)
            <tr>
                <td><span class="verde"><b>ACTIVIDAD.- </b></span><b>{{$actividad->titulo}}</b><br/>{{$actividad->descripcion_actividad}}</td>
            </tr>
            @endforeach
            @endif
            @if(isset($comentarios))
            @foreach($comentarios as $comentario)
            <tr>
                <td><span class="verde"><b>COMENTARIO</b></span><br/>{{$comentario->comentario}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="col-lg-12 d-flex justify-content-end mt-4">
        <a href="{{url('admin/listadoUsuarios')}}"
           class="btn btn-verde">Volver a listado</a>
    </div>
</div>	     

@endsection