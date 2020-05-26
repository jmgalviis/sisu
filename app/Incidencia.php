<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Incidencia extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'file', 'id_user', 'id_tipo_incidencia', 'id_prioridad'];

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id');
    }

    public function tipo_incidencia()
    {
        return $this->belongsTo(TipoIncidencia::class, 'id_tipo_incidencia', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user', 'id');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'id_incidencia', 'id');
    }

    public function prioridades()
    {
        return $this->belongsTo(Prioridad::class,'id_prioridad','id');
    }


    public function scopeByUser($query)
    {
        return $query->whereIdUser(auth()->id());
    }
}
