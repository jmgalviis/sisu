@extends('layouts.template')

@section('main')
    <div class="">
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Modulo Roles
                        <a
                            class="btn btn-primary btn-sm active float-right"
                            href="{{ route('roles.create') }}"
                        >
                            Crear
                        </a>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="table_incidencia" class="table table-hover">
                                <thead>
                                <tr>
                                    <th width="10 px">ID</th>
                                    <th>Incidencia</th>
                                    <th class="text-center">Estado</th>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($incidencias as $incidencia)
                                    <tr>
                                        <td>{{ $incidencia->id }}</td>
                                        <td>{{ $incidencia->title }}</td>
                                        <td class="text-center">
                                                     <span class="badge {{ $incidencia->estado->color }}">
                                                       {{ $incidencia->estado->name }}
                                                     </span>
                                        </td>
                                        <td> {{ $incidencia->user->name }}</td>
                                        <td> {{ $incidencia->created_at->format('d/m/Y') }}</td>
                                        <td><a href="{{ route('ver.incidencia', $incidencia->id) }}" class="btn btn-info waves-effect waves-light">Ver</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            No hay registros, agrega el primero
                                            <button
                                                type="button" class="btn btn-primary btn-sm active float-right"
                                            >
                                                Crear
                                            </button>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
