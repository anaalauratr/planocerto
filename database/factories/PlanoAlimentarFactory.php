<?php

namespace Database\Factories;

use App\Models\PlanoAlimentar;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanoAlimentarFactory extends Factory
{
    protected $model = PlanoAlimentar::class;

    public function definition(): array
    {
        return [
            'users_id_nutricionista' => User::factory(),
            'nome' => fake()->sentence(2),
            'descricao' => fake()->sentence(),
            'data_inicio' => fake()->date(),
            'data_fim' => fake()->date(),
        ];
    }
}