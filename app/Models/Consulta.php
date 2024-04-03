<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class, 'paciente_consulta');
    }
    protected $fillable = ['nome_consulta', 'duracao_consulta'] ;
    use HasFactory;
}
