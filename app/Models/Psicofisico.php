<?php

namespace App\Models;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Psicofisico extends Model
{
    use HasFactory;

    //Definimos la tabla a la que hace referencia el modelo, en la base de datos
        // protected $table = 'psicofisicos';
    
    //Definimos los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'fecha_realizacion',
        'hizo_reserva',
        'tiene_sobre',
    ];
    
    public function postulante()
    {
        return $this->belongsTo(Postulante::class);
    }


}
