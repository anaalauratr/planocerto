<?php

namespace Database\Factories;

use App\Models\Refeicao;
use App\Models\PlanoAlimentar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Refeicao>
 */
class RefeicaoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'plano_alimentar_id' => PlanoAlimentar::factory(),
            'nome' => fake()->sentence(2),
            'descricao' => fake()->sentence(),
            'horario' => fake()->time(),
            'calorias' => fake()->numberBetween(100, 1000),
        ];
    }
}