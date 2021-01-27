<?php


namespace App\Patrones;

class Fachada
{
    public static function usuarioEstados()
    {
        return array(
            true=> 'Alta',
            false => 'Baja'
        );
    }

    public static function getRoles()
    {
        return array(
            'Administrador'=> 'Administrador',
            'Funcionario' => 'Funcionario'
        );
    }
}
