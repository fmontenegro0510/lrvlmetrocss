<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory; 

    //Definimos la tabla a la que hace referencia el modelo, en la base de datos
        protected $table = 'telefonos';

    //Definimos los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'numero',
    ];
    
}
