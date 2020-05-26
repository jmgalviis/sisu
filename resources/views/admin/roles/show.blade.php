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
                        <p><strong>Nombre</strong>     {{ $role->name }}</p>
                        <p><strong>Slug</strong>       {{ $role->slug }}</p>
                        <p><strong>Descripción</strong> {{ $role->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
