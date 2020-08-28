<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $table = 'parametro';

    protected $fillable = ['prm_id', 'filial_fil_id', 'prm_nome', 'prm_modulo', 'prm_targetsuperior', 'prm_targetinferior'];
    
    public $timestamps = false;
}
