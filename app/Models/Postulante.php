<?php

namespace App\Models;

use App\Models\Civil;
use App\Models\Concurso;
use App\Models\Telefono;
use App\Models\Psicofisico;
use App\Models\Documentacion;
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

    //Uno a Muchos (Un postulante tiene uno o Muchos numeros de Telefono)
    public function telefonos()
    {
        return $this->hasMany(Telefono::class);
    }

    //Muchos a Uno (Un postulante tiene un estado civil)
    public function civils()
    {
        return $this->belongsTo(Civil::class);
    }

    //Uno a Uno (Un postulante tiene un estudio Psicofisico)
    public function psicofisicos()
    {
        return $this->hasOne(Psicofisico::class);
    }

    //Uno a Uno (Un postulante tiene un consjunto de Documentacion)
    public function documentacion()
    {
        return $this->hasOne(Documentacion::class);
    }

    //Muchos a Muchos (Un postulante rinde muchos Concursos)
    public function concursos()
    {
        return $this->belongsToMany(Concurso::class);
    }
 


}
