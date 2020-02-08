<?php

use Illuminate\Database\Seeder;

class ArtistaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artista')->insert([
            'nome' => 'The Killers',
            'popularidade' => '12698.217',
            'foto' => 'thekillers.png',
            'created_at' => date('Y-m-d H:i:s'),            
        ]);

        DB::table('artista')->insert([
            'nome' => 'Linkin Park',
            'popularidade' => '17697.317',
            'foto' => 'linkinpark.png',
            'created_at' => date('Y-m-d H:i:s'),            
        ]);

        DB::table('artista')->insert([
            'nome' => 'Muse',
            'popularidade' => '8694.011',
            'foto' => 'muse.png',
            'created_at' => date('Y-m-d H:i:s'),            
        ]);
    }
}
