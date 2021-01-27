<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User;
use App\Patrones\Roles;

use Hash;

class Usuario extends User
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'nombre', 'apellido',
        'cuenta', 'password', 'rol', 'ci',
        'alta'
    ];

    public function setPasswordAttribute($value)
    {
        if($value !== null)
            $this->attributes['password'] = bcrypt($value);
    }

    public function getNombreCompletoAttribute()
    {
        return $this->attributes['nombre'] . ' ' .
            $this->attributes['apellido'];
    }


    public function esAdministrador()
    {
        return $this->attributes['rol'] === Roles::administrador;
    }

    public function esFuncionario()
    {
        return $this->attributes['rol'] === Roles::funcionario;
    }
}
