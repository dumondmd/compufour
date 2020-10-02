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
        DB::table('generos')->insert(['tipo'=>'acao']);
        DB::table('generos')->insert(['tipo'=>'comedia']);
        DB::table('generos')->insert(['tipo'=>'drama']);
        DB::table('generos')->insert(['tipo'=>'ficcao']);
    }
}
