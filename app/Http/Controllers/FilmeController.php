<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;
use App\Models\Genero;

class FilmeController extends Controller
{
    
    public function showFilmes()
    {
        return Filme::all(); 
               
    }

    public function showGeneros()
    {
        return Genero::all();        
    }
}
