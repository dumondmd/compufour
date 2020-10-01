<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filmes')->insert(['nome'=>'Ação', 'avaliacao'=>5, 'genero_id'=>1]);
        DB::table('filmes')->insert(['nome'=>'Comédia', 'avaliacao'=>3, 'genero_id'=>2]);
        DB::table('filmes')->insert(['nome'=>'Drama', 'avaliacao'=>2, 'genero_id'=>3]);
        DB::table('filmes')->insert(['nome'=>'Ficção', 'avaliacao'=>1, 'genero_id'=>4]);
    }
}
