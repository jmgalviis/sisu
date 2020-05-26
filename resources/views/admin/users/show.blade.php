@extends('layouts.template')

@section('main')
    <div class="">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Datos del usuario {{ $user->name }}</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Nombre</strong>     {{ $user->name }}</p>
                        <p><strong>Email</strong>       {{ $user->email }}</p>
                        <hr>
                        <h5>Roles asignados</h5>
                        @forelse($user->roles as $role)
                            <p> {{ $role->name }}</p>
                        @empty
                            <p>No tiene roles asignados </p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
