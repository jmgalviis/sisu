@extends('layouts.template')

@section('main')
    <div class="">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Roles</h3>
                    </div>
                    <div class="card-body">
                        {{ Form::model($role, ['route' => ['roles.update', $role->id],
                   'method' => 'PUT']) }}

                        @include('admin.roles.partial.form')

                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
