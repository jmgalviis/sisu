@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="right-column sisu">
                <div class="row mx-0">
                    <div class="col-md-5 order-md-1 signin-right-column px-5 bg-dark">
                        <a class="signin-logo d-sm-block d-md-none" href="#">
                            <img src="assets/img/logo-white.png" width="145" height="32.3" alt="sisu">
                        </a>
                        <h1 class="display-4">Registre su incidencia</h1>
                        <p class="lead mb-5">
                            Sistema de incidencias y solicitudes de usuario.
                        </p>
                    </div>
                    <div class="col-md-7 order-md-2 signin-left-column bg-white px-5">
                        <a class="signin-logo d-sm-none d-md-block" href="#">
                            <img src="assets/img/logo-dark.png" width="145" height="32.3" alt="sisu">
                        </a>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputTitulo
                                ">Titulo</label>
                                <input type="text" class="form-control @error('titulo') border-danger @enderror" name="titulo" value="{{ old('titulo') }}" id="titulo" aria-describedby="tituloHelp" placeholder="Ingresar titulo">
                                @error('titulo')
                                 <div class="form-control-feedback text-danger">{{ $message }}</div>
                                @enderror
                                <small id="tituloHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDescripcion">Descripcion</label>
                                <textarea class="form-control @error('descripcion') border-danger @enderror" name="descripcion" value="{{ old('descripcion') }}" id="descripcion" aria-describedby="descripcionHelp" placeholder="Descripción"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile"></label>
                                <input type="file" class="form-control-file" name="file" placeholder="">
                            </div>

                            <button type="submit" class="btn btn-primary btn-gradient btn-block">
                                <i class="batch-icon batch-icon-quill"></i>
                                Crear incidencia
                            </button>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
