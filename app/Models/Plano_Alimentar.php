<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plano_Alimentar extends Model
{
    use SoftDeletes;
    protected $table = 'plano_alimentar';
   protected $fillable = [
    'users_id_nutricionista',
    'nome',
    'descricao',
    'data_inicio',
    'data_fim'
];
}
