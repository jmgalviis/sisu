<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use SoftDeletes;

    protected $fillable = ['id_user', 'comentario', 'id_incidencia'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user','id');
    }
}
