<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Cliente;
use App\Models\PlanoAlimentar;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'users_id' => User::factory(),
            'plano_alimentar_id' => PlanoAlimentar::factory(),
            'objetivo' => fake()->sentence(),
            'data_nascimento' => fake()->date(),
            'peso' => fake()->randomFloat(2, 40, 120),
            'altura' => fake()->randomFloat(2, 1.40, 2.10),
            'sexo' => fake()->randomElement([
                'Masculino',
                'Feminino'
            ]),
        ];
    }
}