<?php
/*conspirablog/database/seeders/DatabaseSeeder.php*/

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Chama o UserSeeder para criar o usuário administrador
        $this->call(UserSeeder::class);
    }
}
