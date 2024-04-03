<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'senha',
        'especialidade',


    ];
    protected $hidden = [];

    use HasFactory;
}
