@extends('layouts.app')

@section('content')
    <div class="right-column">
        @include('layouts.usernavbar')
        <main class="main-content p-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h1> #{{ $incidencia->id }} {{ $incidencia->title }}</h1>

                                <p class="lead-2">Usuario: {{ $incidencia->user->name }}</p>
                                <span class="badge badge-pill {{ $incidencia->estado->color }} ">
                                        {{ $incidencia->estado->name }}
                                </span>
                                <hr>
                                <p class="lead-2"> Tipo de Incidencia:  {{ $incidencia->tipo_incidencia->name }}</p>
                                <hr>
                                <p class="lead-2">Descripción:</p>
                                <p class="lead">{{ $incidencia->description }}</p>
                                @if ($incidencia->file)
                                    <hr>
                                    <a href="{{ $incidencia->file }}" target="_blank" class="btn btn-primary btn-lg waves-effect waves-light">
                                        <i class="batch-icon batch-icon-cloud-download"></i> Documento
                                    </a>
                                @endif
                                @can('admin')
                                    {{ Form::open(['route' => ['incidencia.update', $incidencia->id], 'method' => 'put'])}}
                                    <div class="form-group">
                                        {{ Form::label('id_prioridad', 'Prioridad') }}
                                        {{ Form::select('id_prioridad', $incidencia->prioridades->pluck('name','id'), $incidencia->prioridades->id, ['class' => 'custom-select','placeholder' => 'Seleccionar...', 'required' => 'true']) }}
                                        @error('tipo_incidencia')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('estado', 'Estado') }}
                                        {{ Form::select('id_estado', $incidencia->estado->pluck('name', 'id'), $incidencia->estado->id, ['class' => 'custom-select','placeholder' => 'Seleccionar...', 'required' => 'true']) }}
                                        @error('estado')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('id_user_asignado', 'Asignar Operario') }}
                                        {{ Form::select('id_user_asignado', $usuarios->pluck('name','id'), $incidencia->id_user_asignado, ['class' => 'custom-select','placeholder' => 'Seleccionar...', 'required' => 'true']) }}
                                        @error('id_user_asignado')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endcan
                                @forelse($incidencia->comentarios as $comentario)
                                    @include('incidencia.vercomentario')
                                @empty
                                @endforelse
                                <hr>
                                @cannot('admin')
                                <a href="{{ url('home') }}" class="btn btn-light waves-effect waves-light">Regresar</a>
                                @endcannot
                                @can('admin')
                                    {{ Form::hidden('id_incidencia', $incidencia->id) }}
                                    <a href="{{ url('admin/incidencia') }}" class="btn btn-light waves-effect waves-light">Regresar</a>
                                    <button type="submit" class="btn btn-secondary waves-effect waves-light">Guardar</button>
                                @endcan
                                {{ Form::close() }}
                                <hr>
                                {{ Form::open(['route' => 'agregar.comentario', 'method' => 'post'])}}
                                @csrf
                                @include('partial.comentario')
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
