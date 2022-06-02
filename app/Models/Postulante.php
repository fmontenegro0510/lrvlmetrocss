<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{
    use HasFactory;

    //Definimos la tabla a la que hace referencia el modelo, en la base de datos
        protected $table = 'postulantes';

    //Definimos los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'fecha_matricula',
        'domicilio',
        'email',
        'url_foto',
        'cargo_ocupa',
    ];

    public function telefonos()
    {
        return $this->hasMany(Telefono::class);
    }

}
