@extends('layouts.template')

@section('main')
    <div class="">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Editar Usuario</h3>
                    </div>
                    <div class="card-body">
                        {{ Form::model($user, ['route' => ['users.update', $user->id],
                   'method' => 'PUT']) }}

                        @include('admin.users.partial.form')

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
