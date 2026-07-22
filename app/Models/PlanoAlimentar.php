<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\Refeicao;
use App\Models\Cliente;

class PlanoAlimentar extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'plano_alimentar';

    protected $fillable = [
        'users_id_nutricionista',
        'nome',
        'descricao',
        'data_inicio',
        'data_fim'
    ];

    // Nutricionista
    public function nutricionista()
    {
        return $this->belongsTo(User::class, 'users_id_nutricionista');
    }

    // Refeições
    public function refeicoes()
    {
        return $this->hasMany(Refeicao::class, 'plano_alimentar_id');
    }

    // Clientes vinculados ao plano
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'plano_alimentar_id');
    }
}