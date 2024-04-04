<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['nome_consulta', 'descricao_consulta'];
    use HasFactory;
    public function pacientes()
    {

        return $this->belongsToMany(Paciente::class, 'paciente_consulta');
    }
}
