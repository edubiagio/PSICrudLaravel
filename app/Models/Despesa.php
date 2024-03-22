<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    public $timestamps = false;
    protected $fillable = ['co_despesa','co_unidade_demandante','dt_pagamento','vr_total','observacao','matricula_usuario_inclusao'];
    protected $primaryKey   = 'co_despesa';

}
