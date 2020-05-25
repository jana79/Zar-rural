@extends("layouts.layoutGral")


@section("infoGeneral")

<h1>Nueva Actividad</h1>
<p class="text-center">Utiliza el formulario para añadir una nueva actividad.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Añadir nueva actividad</h2>
    <div>
        <form id="formularioActividad" method="POST" class="pb-5" 
              action="{{route("actividad.store")}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Título *</label>
                <input type="text" class="form-control" id="titulo" name="titulo"> 

            </div>
            <div class="form-group">
                <label for="categoria">Elige la categoría *</label>
                <select id="categoria" class="form-control" name="categoria">
                    <option></option>
                    <option>Naturaleza</option>
                    <option>Ocio</option>
                    <option>Patrimonio</option>
                    <option>Tradición</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción *</label>
                <textarea class="form-control" id="descripcion_actividad" 
                          name="descripcion_actividad"></textarea>
            </div>
            <div class="form-group">
                <label for="portada">Imagen de portada *</label>
                <input type="file" class="form-control-file" id="portada" 
                       name="portada">
            </div>
            <div class="form-group">
                <label for="poblacion">Elige la población *</label>
                <select id="poblacion_id" class="form-control" name="poblacion_id">
                    <option></option>
                    @foreach($poblaciones as $poblacion)
                    <option value="{{$poblacion->id_poblacion}}">
                        {{$poblacion->nombre_poblacion}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div>
                    <input type="hidden" class="form-control" id="user_id" name="user_id" 
                           value="{{$user->id_user}}">
                </div>
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

