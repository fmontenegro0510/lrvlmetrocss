<?php

namespace App\Models;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Civil extends Model
{
    use HasFactory;

    protected $fillable = [
        'denominacion',
    ];

    public function postulantes()
    {
        return $this->hasMany(Postulante::class);
    }

}
