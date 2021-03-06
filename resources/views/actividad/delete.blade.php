@extends("layouts.layoutGral")


@section("infoGeneral")

<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">¿Está seguro de querer eliminar la actividad
        {{$actividad->titulo}}?</h2>
    <div class="col-lg-12 d-flex justify-content-between mt-4">
        <div>
            <a href="{{route('actividad.show',$actividad->id_actividad)}}"
               class="btn btn-verde ">Cancelar
            </a>
        </div>
        <form id="formularioEliminarActividad" method="POST" class="pb-5" 
              action="{{route('actividad.destroy', $actividad->id_actividad)}}"
              enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-verde" name="submit" 
                   value="Eliminar" id= "enviar">
        </form>
    </div>
</div>

@endsection
