<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PlanoAlimentar;
use App\Models\Cliente;
use App\Models\Refeicao;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        PlanoAlimentar::factory(10)->create();

        Cliente::factory(10)->create();

        Refeicao::factory(30)->create();
    }
}