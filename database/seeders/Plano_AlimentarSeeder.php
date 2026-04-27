<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plano_Alimentar;

class Plano_AlimentarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Plano_Alimentar::create([
            'users_id_nutricionista' => 1,
            'nome' => 'Plano Emagrecimento',
            'descricao' => 'Plano alimentar para perda de peso',
            'data_inicio' => '2026-01-01',
            'data_fim' => '2026-03-01'
        ]);

        Plano_Alimentar::create([
            'users_id_nutricionista' => 1,
            'nome' => 'Plano Hipertrofia',
            'descricao' => 'Plano alimentar para ganho de massa muscular',
            'data_inicio' => '2026-02-01',
            'data_fim' => '2026-04-01'
        ]);
    }
}
