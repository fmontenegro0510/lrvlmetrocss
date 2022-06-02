<?php

namespace App\Models;

use App\Models\Telefono;
use App\Models\Estado_civil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Postulante extends Model
{
    use HasFactory;

    //Definimos la tabla a la que hace referencia el modelo, en la base de datos
        // protected $table = 'postulantes';

    //Definimos los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'apellido',
        'nombre',
        'dni',
        'fecha_matricula',
        'domicilio',
        'url_foto',
        'cargo_ocupa',
    ];

    public function telefonos()
    {
        return $this->hasMany(Telefono::class);
    }

    public function estado_civil()
    {
        return $this->belongsTo(Estado_civil::class);
    }

}
