<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    protected $fillable = ['tipo', 'valor', 'target', 'idModulo', 'data', 'hora'];
}
