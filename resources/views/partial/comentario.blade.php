<div class="comment-block">
    <div class="form-group">
        {{ Form::hidden('id_incidencia', $incidencia->id) }}
        {{ Form::textarea('comentario', null, ['class' => 'form-control', 'placeholder' => 'Realizar comentario...']) }}
        <div class="media-feed-control clearfix">
            <button type="submit" class="btn btn-secondary btn-sm comment-reply float-right waves-effect waves-light">Comentar</button>
        </div>
    </div>
</div>
