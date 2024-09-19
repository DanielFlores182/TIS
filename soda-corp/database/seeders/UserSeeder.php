<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'John Doe',
            'clave' => bcrypt('password123'), // Encripta la clave
            'tipo' => 12,
            'correo' => 'john@example.com',
        ]);

        User::create([
            'nombre' => 'Jane Doe',
            'clave' => bcrypt('password456'),
            'tipo' => 12,
            'correo' => 'jane@example.com',
        ]);
    }
}
