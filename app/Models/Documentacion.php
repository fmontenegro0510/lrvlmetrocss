<?php

namespace App\Models;

use App\Models\Postulante;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documentacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'buena_conducta',
        'foto',
        'antiguedad',
        'sanciones',
        'certificado_domicilio',
        'redam',
        'titulo_autenticado',
        'psicofisico',
        'info_sumaria',
        'matricula',
    ];

    public function postulante()
    {
        return $this->belongsTo(Postulante::class);
    }




}
