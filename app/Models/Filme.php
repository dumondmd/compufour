<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    function generos() {
        //return $this->belongsToMany("App\Genero", "alocacoes")->withPivot('horas_semanais');    	
        return $this->hasMany(Genero::class, 'nome');
    }
}
