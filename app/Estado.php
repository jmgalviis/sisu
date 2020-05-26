<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    use SoftDeletes;
    const NUEVA = 1;
    const ENESPERA = 2;
    const RESUELTA = 3;
    const CERRADA = 4;
}
