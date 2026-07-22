<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\PlanoAlimentar;
use App\Models\Cliente;

#[Fillable(['name', 'email', 'password', 'tipo_usuario'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nutricionista -> Planos Alimentares
    public function planosAlimentares()
    {
        return $this->hasMany(PlanoAlimentar::class, 'users_id_nutricionista');
    }

    // Cliente -> Dados do cliente
    public function relacaoCliente()
    {
        return $this->hasOne(Cliente::class, 'users_id');
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}