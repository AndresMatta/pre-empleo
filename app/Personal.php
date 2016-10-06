<?php

namespace Formulario;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personal';

    protected $fillable = [
    'nombre','identificacion','edad','estado_civil','nacionalidad','residencia','puesto'
    ];
}
