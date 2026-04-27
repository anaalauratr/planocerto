<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Refeicao;
class RefeicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Refeicao::create([
            'plano_alimentar_id' => 1,
            'nome' => 'Café da Manhã',
            'descricao' => 'Pão integral, ovo e fruta',
            'horario' => '07:30:00',
            'calorias' => 350
        ]);

    }
}
