<?php
/*conspirablog/database/seeders/UserSeeder.php*/
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Nome do Admin', // Altere para o nome desejado
            'email' => 'admin@example.com', // Altere para o email desejado
            'password' => bcrypt('senha_secreta'), // Altere para a senha desejada
            'is_admin' => true, // Define como administrador
        ]);
    }
}
