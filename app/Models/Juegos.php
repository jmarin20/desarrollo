<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juegos extends Authenticatable
{

    protected $table='videojuegos';
    protected $fillable = [
        'nombre',
        'descripcion',
        'categoria',
    ];
    protected $primaryKey='idvideojuegos';


    protected $shidden =  [
        'created_at','update_at'
    ];

}
