<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Filme;
use App\Models\Genero;

class FilmeController extends Controller
{
    
    public function showFilmes($qtd = null)
    {
        if(isset($qtd) || empty($qtd)){
            return Filme::select('filmes.id', 'filmes.nome', 'filmes.avaliacao', 'generos.tipo as genero')
            ->join('generos', 'filmes.genero_id', '=', 'generos.id')                        
            ->limit($qtd)
            ->get();
        }
        
        else {
            return Filme::select('filmes.id', 'filmes.nome', 'filmes.avaliacao', 'generos.tipo as genero')
            ->join('generos', 'filmes.genero_id', '=', 'generos.id')                                    
            ->get();
        }
        
               
    }

    public function showTopfilmes($top = null)
    {
        //return "ola";
        if(isset($top) || empty($top)){
            return Filme::select('filmes.id', 'filmes.nome', 'filmes.avaliacao', 'generos.tipo as genero')
            ->join('generos', 'filmes.genero_id', '=', 'generos.id')
            ->orderBy('avaliacao', 'DESC')                        
            ->limit($top)
            ->get();
        }
        
        else {
            return Filme::select('filmes.id', 'filmes.nome', 'filmes.avaliacao', 'generos.tipo as genero')
            ->join('generos', 'filmes.genero_id', '=', 'generos.id')
            ->orderBy('avaliacao', 'DESC')                                     
            ->get();
        }
    }


    public function showFilmeNome($nome)
    {        
        return Filme::select('filmes.id', 'filmes.nome', 'filmes.avaliacao', 'generos.tipo as genero')
            ->join('generos', 'filmes.genero_id', '=', 'generos.id')
            ->where('filmes.nome', '=', $nome)                        
           ->get();           
    }


    public function showFilmeCategoria($categoria){
        return Filme::select('filmes.id', 'filmes.nome', 'filmes.avaliacao', 'generos.tipo as genero')
            ->join('generos', 'filmes.genero_id', '=', 'generos.id')
            ->where('generos.tipo', '=', $categoria)                        
           ->get(); 
    }

    
    public function showGeneros()
    {
        return Genero::all();        
    }

    public function showGeneroId($id)
    {
        return Genero::findOrFail($id);        
    }


}
