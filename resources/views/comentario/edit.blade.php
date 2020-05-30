@extends("layouts.layoutGral")


@section("infoGeneral")

<h1>Editar Comentario</h1>

<p class="text-center">Utiliza el formulario para editar un comentario.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Editar comentario</h2>
    <div>
        <form id="formularioEditarActividad" method="POST" class="pb-5" 
              action="{{route('comentario.update', $comentario->id_comentario)}}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="comentario">Comentario *</label>
                <textarea class="form-control" 
                          id="comentario" 
                          name="comentario">{{$comentario->comentario}}</textarea>
            </div>
            <div class="form-group">
                <label for="fecha_comentario">Selecciona la fecha *</label>
                <input type="date" class="form-control-file" id="fecha_comentario" 
                       name="fecha_comentario" value="{{$comentario->fecha_comentario}}">
            </div>
            <div class="form-group">
               
                <input type="hidden" class="form-control" id="actividad_id" 
                       name="actividad_id" value="{{$actividad}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" 
                       name="user_id" value="{{$user->id_user}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="autor" 
                       name="autor" value="{{$user->name}}">
            </div>
            
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-4 pt-5">
                    <button type="submit" class="btn btn-verde" name="submit" 
                            value="Enviar" id= "enviar">Añadir</button>
                </div>
            </div>
        </form>
    </div>
</div>	     
@endsection