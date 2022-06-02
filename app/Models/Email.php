<?php

namespace App\Models;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Email extends Model
{
    use HasFactory;

    //Definimos la tabla a la que hace referencia el modelo, en la base de datos
        // protected $table = 'emails';
    
    //Definimos los campos que se pueden llenar de forma masiva
    protected $fillable = [
        'email',
    ];

    public function postulante()
    {
        return $this->belongsTo(Postulante::class);
    }

}
