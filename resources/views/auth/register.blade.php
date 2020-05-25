@extends('layouts.layoutGral')

@section('infoGeneral')

<h1>Registro</h1>

<p class="text-center">Utiliza el formulario para registrarte en la aplicación.</p>
<div class="container mt-5 mb-5 shadow col-md-6 pl-5 pr-5">					
    <h2 class="text-center py-4">Nuevo usuario</h2>
    <div>
        <form id="formularioRegistro"class="pb-5" method="POST" 
              action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">{{ __('Nombre *') }} </label>
                <input id="nombre" type="text" 
                       class="form-control @error('nombre') is-invalid @enderror" 
                       name="nombre" value="{{ old('nombre') }}" 
                       required autocomplete="nombre" autofocus>
                @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="apellidos">{{ __('Apellidos *') }}</label>
                <input id="apellidos" type="text" 
                       class="form-control @error('apellidos') is-invalid @enderror" 
                       name="apellidos" value="{{ old('apellidos') }}" 
                       required autocomplete="apellidos" autofocus>
                 @error('apellidos')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
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
            <div class="form-group">
                <label for="nom_usuario">{{ __('Nombre de usuario *') }}</label>
                <input id="name" type="text" 
                       class="form-control @error('name') is-invalid @enderror" 
                       name="name" value="{{ old('name') }}" 
                       required autocomplete="name" autofocus>
                @error('name')
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
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirma la contraseña *') }}</label>
                <input id="password-confirm" type="password" 
                       class="form-control" 
                       name="password_confirmation" required autocomplete="new-password">
                 
            </div>
            
            <div class="form-group">
                <label for="colaborador">{{ __('Elige cómo quieres registrarte *') }}</label>
                <select id="colaborador" class="form-control" name="colaborador">
                    <option value="0">Registrado</option>
                    <option value="1">Colaborador</option>
                </select>
            </div>
            <div class="form-group">
                <div>
                    <input type="hidden" class="form-control" id="admin" name="admin" 
                           value="0">
                </div>
            </div>
            <div class="form-group">
                <div>
                    <input type="hidden" class="form-control" id="bloqueado" name="bloqueado" 
                           value="0">
                </div>
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
                <div class="col-sm-8 offset-sm-4 pt-5">
                    <button type="submit" class="btn btn-verde">
                        {{ __('Enviar') }}
                    </button>
                </div>
            </div>


        </form>
    </div>
</div>	     



@endsection
