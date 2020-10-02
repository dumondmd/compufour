<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Filme::factory(200)->create();
        //\App\Models\Genero::factory(4)->create();
        
        
        $this->call(GenerosSeeder::class);
        //$this->call(FilmesSeeder::class);
        
    }
}
