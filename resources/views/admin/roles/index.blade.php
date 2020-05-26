@extends('layouts.template')

@section('main')
    <div class="">
        <div class="row mt-5">
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
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th width="10 px">ID</th>
                                    <th >Rol</th>
                                    <th >Descripción</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($roles as $role)
                                    <tr>
                                        <td width="10 px">{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td width="30 px">
                                            <button onclick="location.href='{{ route("roles.show", $role->id) }}'"
                                               class="btn btn-primary active waves-effect waves-light">
                                                Ver
                                            </button>
                                        </td>
                                        <td width="30 px">
                                            <button onclick="location.href='{{ route("roles.edit", $role->id) }}'"
                                               class="btn btn-secondary active waves-effect waves-light">
                                                Editar
                                            </button>
                                        </td>
                                        <td width="30 px">
                                            {{ Form::open(['route' => ['roles.destroy', $role->id],
                                            'method' => 'DELETE', 'id' => 'eliminar-form']) }}
                                            <button type="submit" class="btn btn-danger active waves-effect waves-light">
                                                Eliminar
                                            </button>
                                            {{ Form::close() }}
                                        </td>
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
