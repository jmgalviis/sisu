@extends('layouts.app')

@section('content')
<div class="right-column sisu">
                <div class="row mx-0">
                    <div class="col-md-7 order-md-2 signin-right-column px-5 bg-dark">
                        <a class="signin-logo d-sm-block d-md-none" href="#">
                            <img src="assets/img/logo-white.png" width="145" height="32.3" alt="sisu">
                        </a>
                        <h1 class="display-4">INICIA SESIÓN PARA EMPEZAR</h1>
                        <p class="lead mb-5">Sistema de incidencias y solicitudes de usuario.
                        </p>
                    </div>
                    <div class="col-md-5 order-md-1 signin-left-column bg-white px-5">
                        <a class="signin-logo d-sm-none d-md-block" href="#">
                            <img src="assets/img/logo-dark.png" width="145" height="32.3" alt="sisu">
                        </a>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electrónico</label>
                                <input type="email" class="form-control @error('email') border-danger @enderror" name="email" value="{{ old('email') }}" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo">
                                 @error('email')
                                 <div class="form-control-feedback text-danger">{{ $message }}</div>                                 
                                @enderror
                                <small id="emailHelp" class="form-text text-muted">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="password @error('password') is-invalid @enderror" name="password" placeholder="Ingrese su contraseña">
                                 @error('password')
                                 <div class="form-control-feedback text-danger">{{ $message }}</div>                                 
                                @enderror
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="keep-signed-in">
                                <label class="custom-control-label" for="keep-signed-in">
                             Mantenerme conectado</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-gradient btn-block">
                                <i class="batch-icon batch-icon-key"></i>
                                Iniciar sesion
                            </button>
                            <hr>
                            <p class="text-center"> 
                          ¿No tienes una cuenta? <a href="sisu-signup.html">Registrate aquí</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>            
@endsection
