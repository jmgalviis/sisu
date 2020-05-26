@extends('layouts.template')

@section('main')
    <div class="">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Nuevo Usuario</h3>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['route' => 'users.store']) }}

                        @include('admin.users.partial.form')

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
