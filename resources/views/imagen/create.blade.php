@extends("layouts.layoutGral")


@section("infoGeneral")

<h1>Nueva imagen</h1>

<p class="text-center">Utiliza el formulario para añadir una imagen que ilustre la actividad realizada.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Añadir imagen</h2>
    <div>
        <form id="formularioImagen" method="POST" class="pb-5" 
              action="{{route("imagen.store")}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img">Selecciona una imagen *</label>
                <input type="file" class="form-control-file" id="img" name="img">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="actividad_id" 
                       name="actividad_id" value="{{$actividad->id_actividad}}">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" id="user_id" 
                       name="user_id" value="{{$user->id_user}}">
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

