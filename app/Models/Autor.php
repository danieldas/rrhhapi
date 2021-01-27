<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autor';
    protected $primaryKey = 'id';

    public $fillable = ['id',
        'nombre'
    ];
}
