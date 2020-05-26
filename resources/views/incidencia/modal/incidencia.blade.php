<div class="modal fade modal-incidencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Incidencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{ Form::open(['route' => 'guardar.incidencia', 'method' => 'post', 'files' => true]) }}
            <div class="modal-body">
                @include('incidencia.partial.form')
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-gradient " data-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary btn-gradient">
                        <i class="batch-icon batch-icon-quill"></i>
                        Crear incidencia
                    </button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
