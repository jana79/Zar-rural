@extends('layouts.layoutGral')

@section('infoGeneral')

<h1>Inicio de sesión </h1>

<p class="text-center">Utiliza el formulario para iniciar sesión en la aplicación.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-3">Inicio de sesión</h2>
    <div>    
        <form id="formularioLogin" class="pb-5" method="POST" 
              action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">{{ __('Correo Electrónico *') }}</label>
                <input id="email" type="email" 
                       class="form-control @error('email') is-invalid @enderror" 
                       name="email" value="{{ old('email') }}" 
                       required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">{{ __('Contraseña *') }}</label>
                <input id="password" type="password" 
                       class="form-control @error('password') is-invalid @enderror" 
                       name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row pt-4">
                <div class="col-sm-9 offset-sm-4">
                    <button type="submit" class="btn btn-verde" 
                            name="enviar"  id="enviar">
                        {{ __('Enviar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
