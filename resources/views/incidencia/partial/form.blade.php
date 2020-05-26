<div class="form-group">
    {{ Form::label('titulo', 'Título') }}
    {{ Form::text('titulo', null, ['class' => $errors->has('titulo') ? 'form-control border-danger' : 'form-control',
                                  'placeholder' => 'Ingresar Título', 'required' => 'true'
                                  ]) }}
</div>
<div class="form-group">
    {{ Form::label('descripcion', 'Descripción') }}
    {{ Form::textarea('descripcion', null, ['class' => $errors->has('descripcion') ? 'form-control border-danger' : 'form-control', 'required' => 'true']) }}
</div>
<div class="form-group">
    {{ Form::label('prioridad', 'Prioridad') }}
    {{ Form::select('prioridad', $prioridades, null, ['class' => 'custom-select','placeholder' => 'Seleccionar...', 'required' => 'true']) }}
    @error('prioridad')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    {{ Form::label('tipo_incidencia', 'Tipo de incidencia') }}
    {{ Form::select('tipo_incidencia', $tipo_incidencias, null, ['class' => 'custom-select','placeholder' => 'Seleccionar...', 'required' => 'true']) }}
    @error('tipo_incidencia')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<hr>
<div class="input-group">
    <div class="custom-file">
        {{ Form::label('file', 'Elegir un archivo', ['class' => 'custom-file-label']) }}
        {{ Form::file('file', ['class' => 'custom-public-input']) }}
    </div>
</div>
