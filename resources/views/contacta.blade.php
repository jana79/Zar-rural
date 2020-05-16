@extends('layouts.layoutGral')

@section('infoGeneral')
<h1>Bienvenido a la sección Contacta</h1>
<p class="text-center">Utiliza el formulario para ponerte en contacto con nosotros.
    Te responderemos a la mayor brevedad posible.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-5">Formulario de contacto</h2>
    <div>
        <form id="formularioContacto" method="GET" class="pb-5" 
              action="{{url("respuesta")}}">
            <div class="form-group">
                <label for="nombre">Nombre *</label>
                <input type="text" class="form-control" id="nombre" 
                       name="nombre"  placeholder="Escribe tu nombre">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos *</label>
                <input type="text" class="form-control" id="apellidos" 
                       name="apellidos" placeholder="Escribe tus apellidos">
            </div>
            <div class="form-group">
                <label for="mail">Correo electrónico *</label>
                <input type="email" class="form-control" id="mail" 
                       name="email" placeholder="Escribe tu correo electrónico">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje *</label>
                <textarea class="form-control" id="mensaje" 
                          name="mensaje"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" id="politica" name="politica" value="politica" 
                           class="form-check-input"/>
                    <label class="form-check-label">Por favor, acepta 
                        las condiciones del servicio</label>
                </div>
            </div>
            <div class="g-recaptcha pt-3" data-sitekey="6LcnkO0UAAAAAB1-wxUgq4ZAXDUSko8VCKGEUkmK"></div>
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-4 pt-5">
                    <button type="submit" class="btn btn-verde" name="submit" 
                            value="Enviar" id= "enviar">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>	     
@endsection
