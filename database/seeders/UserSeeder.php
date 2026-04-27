<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'ana laura',
            'email' => 'ana@email.com',
            'password' => bcrypt('1234'),
            'tipo_usuario' => 'Nutricionista',
        ]);
         User::create([
            'name' => 'lucas',
            'email' => 'lucas@email.com',
            'password' => bcrypt('123456'),
            'tipo_usuario' => 'Cliente'
        ]);
    }
}
