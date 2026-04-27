<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refeicao extends Model
{
    use SoftDeletes;
    protected $table = 'refeicao';
    protected $fillable = [
    'plano_alimentar_id',
    'nome',
    'descricao',
    'horario',
    'calorias'
];
}
