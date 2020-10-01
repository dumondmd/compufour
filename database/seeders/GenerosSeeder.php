<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert(['nome'=>'Ação']);
        DB::table('generos')->insert(['nome'=>'Comédia']);
        DB::table('generos')->insert(['nome'=>'Drama']);
        DB::table('generos')->insert(['nome'=>'Ficção']);
    }
}
