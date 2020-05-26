@extends('layouts.template')

@section('main')
    <div class="">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Modulo Usuarios
                        <a
                                class="btn btn-primary btn-sm active float-right"
                                href="{{ route('users.create') }}"
                        >
                            Crear
                        </a>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th width="10 px">ID</th>
                                    <th >Name</th>
                                    <th >Email</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td width="10 px">{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td width="10 px">
                                            <button onclick="location.href='{{ route("users.show", $user->id) }}'"
                                               class="btn btn-primary active waves-effect waves-light">
                                                Ver
                                            </button>
                                        </td>
                                        <td width="10 px">
                                            <button onclick="location.href='{{ route("users.edit", $user->id) }}'"
                                               class="btn btn-secondary active waves-effect waves-light">
                                                Editar
                                            </button>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['users.destroy', $user->id],
                                            'method' => 'DELETE']) !!}
                                            <button class="btn btn-danger active waves-effect waves-light">
                                                Eliminar
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            No hay registros, agrega el primero
                                            <a
                                                    class="btn btn-primary btn-sm active float-right"
                                                    href="{{ route('users.create') }}"
                                            >
                                                Crear
                                            </a>
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
