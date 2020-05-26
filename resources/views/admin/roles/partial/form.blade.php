<div class="form-group">
    {{ Form::label('name','Nombre',['class' => 'bmd-label-floating']) }}
    {{ Form::text('name', null, [
        'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) }}
    @if ($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    {{ Form::label('slug','Slug',['class' => 'bmd-label-floating']) }}
    {{ Form::text('slug', null, [
        'class' => $errors->has('slug') ? 'form-control is-invalid' : 'form-control']) }}
    @if ($errors->has('slug'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('slug') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    {{ Form::label('description','Descripción',['class' => 'bmd-label-floating']) }}
    {{ Form::text('description', null, [
        'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) }}
    @if ($errors->has('description'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('description') }}</strong>
        </div>
    @endif
</div>
<h3>Permiso especial</h3>
<div class="form-group">
    <div class="form-check form-check-inline">
        <label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
    </div>
    <div class="form-check form-check-inline">
        <label>{{ Form::radio('special', 'no-access') }} Ningún acceso</label>
    </div>
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">

            @foreach($permissions as $permission)
                <div class="checkbox">
                    <label>
                        {{ Form::checkbox('permissions[]', $permission->id, null) }}
                        <b class="font-weight-bold">{{ $permission->name }}</b>
                        <em>({{ $permission->description }})</em>
                    </label>
                </div>
            @endforeach

</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-info active']) }}
</div>