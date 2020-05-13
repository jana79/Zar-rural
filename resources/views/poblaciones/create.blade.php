@extends("layouts.layoutGral")


@section("infoGeneral")

<h1>Nueva Poblacion</h1>

<p class="text-center">Utiliza el formulario para añadir una nueva poblacion.</p>

<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Añadir nueva población</h2>

    <div>
        <form id="formularioPoblacion" method="POST" class="pb-5" 
              action="{{route("poblaciones.store")}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre_poblacion">Nombre *</label>
                <input type="text" class="form-control" id="nombre_poblacion" 
                       name="nombre_poblacion"> 

            </div>
            <div class="form-group">
                <label for="descripcion_poblacion">Descripción *</label>
                <textarea class="form-control" id="descripcion_poblacion" 
                          name="descripcion_poblacion"></textarea>
            </div>
            <div class="form-group">
                <label for="imagen_poblacion">Imagen de portada *</label>
                <input type="file" class="form-control-file" id="imagen_poblacion" 
                       name="imagen_poblacion">
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

