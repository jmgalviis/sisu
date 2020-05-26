<div class="form-group">
    {{ Form::label('name','Nombre del usuario',['class' => 'bmd-label-floating']) }}
    {{ Form::text('name', null, [
        'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control']) }}
    @if ($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    {{ Form::label('email','Correo',['class' => 'bmd-label-floating']) }}
    {{ Form::email('email', null, [
                   'class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control']) }}

    @if ($errors->has('email'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    {{ Form::label('password', 'Password', ['class' => 'bmd-label-floating']) }}
    {{ Form::password('password', [
                       'class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control']) }}
    @if ($errors->has('password'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </div>
    @endif
</div>
<hr>
<h3>Lista de roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @forelse($roles as $role)
            <li>
                <label>
                    {{ Form::checkbox('roles[]', $role->id, null) }}
                    {{ $role->name }}
                    <em>({{ $role->description }})</em>
                </label>
            </li>
        @empty
            <p>No Hay Roles creados</p>
        @endforelse
    </ul>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-info active']) }}
</div>