<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PlanoAlimentar;

class Refeicao extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'refeicao';

    protected $fillable = [
        'plano_alimentar_id',
        'nome',
        'descricao',
        'horario',
        'calorias'
    ];

    public function planoAlimentar()
    {
        return $this->belongsTo(PlanoAlimentar::class, 'plano_alimentar_id');
    }
}
