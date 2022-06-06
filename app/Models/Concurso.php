<?php

namespace App\Models;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Concurso extends Model
{
    use HasFactory;

    protected $fillable = [
        'expediente',
        'caratula',
    ];

    //Muchos a Muchos (Un concurso esta formado por varios postulantes)
    public function postulantes()
    {
        return $this->belongsToMany(Postulante::class);
    }
    

}
