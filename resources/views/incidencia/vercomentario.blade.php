<div class="list-group">
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $comentario->user->name }}</h5>
            <small>{{ $comentario->created_at->format('d/m/Y') }}</small>
        </div>
            <p class="mb-1">{{ $comentario->comentario }}</p>

    </a>
</div>
