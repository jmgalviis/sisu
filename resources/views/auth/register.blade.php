@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="right-column sisu">
                <div class="row mx-0">
                    <div class="col-md-7 order-md-2 signin-right-column px-5 bg-dark">
                        <a class="signin-logo d-sm-block d-md-none" href="#">
                            <img src="archivos/sisu.png" width="145" height="32.3" alt="sisu">
                        </a>
                        <h1 class="display-4">Regístrese para obtener una cuenta</h1>
                        <p class="lead mb-5">
                            Sistema de incidencias y solicitudes de usuario..
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1 signin-left-column bg-white px-5">
                        <a class="signin-logo d-sm-none d-md-block" href="#">
                            <img src="archivos/sisu.png" width="100" height="100" alt="sisu">
                        </a>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" >{{ __('Nombre') }}</label>
                                <input id="name" type="text" class="form-control @error('name') border-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <div class="form-control-feedback text-danger">{{ $message }}</div>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control @error('email') border-danger @enderror" name="email" value="{{ old('email') }}" id="email"
                                       required autocomplete="new-email" aria-describedby="emailHelp" placeholder="Introducir correo ">
                                @error('email')
                                 <div class="form-control-feedback text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Contraseña" autocomplete="new-password" required>
                            </div>
                             @error('password')
                                 <div class="form-control-feedback text-danger">{{ $message }}</div>
                                @enderror
                            <div class="form-group">
                                <label for="password-confirm">Confirmar contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Password">
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="newsletter-signup">
                                <label class="custom-control-label" for="newsletter-signup">Mantenerme conectado</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-gradient btn-block">
                                <i class="batch-icon batch-icon-quill"></i>
                                registrarse
                            </button>
                            <hr>
                            <p class="text-center">
                                ¿Ya tienes una cuenta? <a href="{{ url('login') }}">Inicia sesión aqui</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
