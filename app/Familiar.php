<?php

namespace Formulario;

use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    //
    protected $table = 'familiar';

    protected $fillable = ['parentesco','edad','causa'];
}
