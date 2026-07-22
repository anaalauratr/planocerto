<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\PlanoAlimentar;

class Cliente extends Model
{
    use SoftDeletes, HasFactory;

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

    // Usuário (cliente)
   public function user()
{
    return $this->belongsTo(User::class, 'users_id');
}

    // Plano alimentar
    public function planoAlimentar()
    {
        return $this->belongsTo(PlanoAlimentar::class, 'plano_alimentar_id');
    }
}