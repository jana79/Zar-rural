@extends('layouts.layoutGral')

@section('infoGeneral')
<h1>Bienvenido a la sección Colabora</h1>
<p>Si organizas actividades, o conoces de actividades que puedan resultar 
    interesantes, puedes colaborar con nosotros. Estaremos encantados de
    hacerlas llegar a todo el mundo :)</p>

<p>Siempre se ha dicho que cuanto más sabemos, mejores decisiones tomamos,
    por lo que para nosotros es muy importante que, tanto en las descripciones
    como en los comentarios, seas lo más concreto y detallado posible, y siempre
    desde el respeto. Nuestro administrador podrá bloquear tu usuario si no se
    cumplen las normas de publicación anteriormente mencionadas.</p>

<p>Desde Zar~rural tenemos el objetivo de ofrecer la información más completa
    a nuestros usuarios para dar a conocer la belleza y el potencial de 
    nuestra provincia.</p>

<p>Para poder compartir actividades, hacer comentarios o subir imágenes,
    es necesario estar registrado.
    Aquí tienes las opciones de registro disponibles y su descripción.
    Elige como quieres registrarte y empieza a disfrutar compartiendo experiencias</p>
<div class="container mt-5 mb-5 shadow col-md-8 pl-5 pr-5 pb-5">					
    <h2 class="text-center py-5">Elige cómo quieres registrarte</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="col-12">
                <i class="fas fa-user col-2 verde"></i> Usuario registrado
                <ul>
                    <li><span class="verde">*</span> Añadir comentarios</li>
                    <li><span class="verde">*</span> Añadir fotografías</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-12">
                <i class="fas fa-user col-2 verde"></i> Usuario colaborador
                <ul>
                    <li><span class="verde">*</span> Añadir actividades</li>
                    <li><span class="verde">*</span> Añadir comentarios</li>
                    <li><span class="verde">*</span> Añadir fotografías</li>
                </ul>
            </div>

        </div>  
        @if(!isset($user))
        <div class="col-12 d-flex justify-content-center mt-2">
            <a href="{{route('register')}}" class="btn btn-verde">
                {{ __('Registro') }}
            </a>
        </div>
        @else
        <div class="mx-auto verde">
            <h4 class="text-center">¡Gracias colaborar con Zar~rural {{$user->name}}!</h4>
        </div>
        @endif
    </div>

</div>

@endsection
