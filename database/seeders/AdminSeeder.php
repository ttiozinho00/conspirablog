<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Verifica se o usuário administrador já existe
        $admin = User::where('email', 'admin@example.com')->first();

        if (!$admin) {
            // Cria o usuário administrador
            User::create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('admin123@'), // Senha criptografada
                'is_admin' => true, // Define o usuário como administrador
            ]);
        }
    }
}
