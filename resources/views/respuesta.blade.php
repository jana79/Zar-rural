@extends('layouts.layoutGral')

@section('infoGeneral')
<h1>Mensaje enviado correctamente</h1>
<div class="container mt-3 mb-3 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center pt-5 mx-auto">Muchas gracias por su mensaje.
        Su mensaje se ha recibido correctamente. En breve nos pondremos 
        en contacto con usted.</h2>
    <div class="col-sm-9 offset-sm-4 pt-3 pb-5">
        <a href="{{url("/")}}" 
           class="btn btn-verde mr-2">
            Volver
        </a>         
    </div>	  
</div>

@endsection
