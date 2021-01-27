<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'cuenta' => 'admin',
            'password' => '123456',
            'rol' => 'Administrador',
            'nombre' => 'Jose',
            'apellido' => 'Lopez',
            'ci' => '7282418',
        ]);

        Usuario::create([
            'cuenta' => 'perez',
            'password' => '123456',
            'rol' => 'Funcionario',
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'ci' => '7654321',
        ]);

    }
}
