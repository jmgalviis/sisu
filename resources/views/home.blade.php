@extends('layouts.app')

@section('content')
    <div class="right-column">
        @include('layouts.usernavbar')
        <main class="main-content p-5">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Dashboard
                            <a data-toggle="modal" data-target=".modal-incidencia" class="btn btn-primary float-right">
                                Nueva incidencia
                            </a>
                        </div>

                        <div class="card-body">
                            @if ($incidencias)
                                <div class="table-responsive">
                                    <table id="datatable-1" class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th width="10 px">ID</th>
                                            <th >Titulo</th>
                                            <th >Estado</th>
                                            <th >&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($incidencias as $incidencia)
                                            <tr>
                                                <td>{{ $incidencia->id }}</td>
                                                <td>{{ $incidencia->title }}</td>
                                                <td>
                                                     <span class="badge {{ $incidencia->estado->color }} float-right">
                                                       {{ $incidencia->estado->name }}
                                                     </span>
                                                </td>
                                                <td><a href="{{ route('ver.incidencia', $incidencia->id) }}" class="btn btn-info waves-effect waves-light">Ver</a></td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
@include('incidencia.modal.incidencia')
    @push('dataTable')
        <script defer>
            $(document).ready( function () {
                $('#datatable-1').DataTable({
                    "language": {
                        "url": "{{ asset('js/Spanish.json') }}"
                    }
                });
            } );
        </script>
    @endpush
@endsection
