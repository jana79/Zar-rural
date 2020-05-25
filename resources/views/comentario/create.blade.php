@extends("layouts.layoutGral")


@section("infoGeneral")
<h1>Nuevo comentario</h1>

<p class="text-center">Utiliza el formulario para añadir un comentario a una actividad.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Añadir comentario</h2>
    <div>
        <form id="formularioComentario" method="POST" class="pb-5" 
              action="{{route("comentario.store")}}">
            @csrf
            <div class="form-group">
                <label for="comentario">Comentario *</label>
                <textarea class="form-control" 
                          id="comentario" 
                          name="comentario"></textarea>
            </div>
            <div class="form-group">
                <label for="fecha_comentario">Selecciona la fecha *</label>
                <input type="date" class="form-control-file" id="fecha_comentario" 
                       name="fecha_comentario">
            </div>
            <div class="form-group">
               
                <input type="hidden" class="form-control" id="actividad_id" 
                       name="actividad_id" value="{{$actividad->id_actividad}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" 
                       name="user_id" value="{{$user->id_user}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="autor" 
                       name="autor" value="{{$user->name}}">
            </div>
            <div class="g-recaptcha pt-3" data-sitekey="6LcnkO0UAAAAAB1-wxUgq4ZAXDUSko8VCKGEUkmK"></div>
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