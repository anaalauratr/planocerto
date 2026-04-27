<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use SoftDeletes;
    protected $table = 'relacao_cliente';
     protected $fillable = [
        'users_id',
        'plano_alimentar_id',
        'objetivo',
        'data_nascimento',
        'peso',
        'altura',
        'sexo'
    ];
}
