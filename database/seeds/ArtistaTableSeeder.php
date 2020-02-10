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
            'foto' => 'albuns/thekillers.jpg',
            'created_at' => date('Y-m-d H:i:s'),            
        ]);

        DB::table('artista')->insert([
            'nome' => 'Linkin Park',
            'popularidade' => '17697.317',
            'foto' => 'albuns/linkinpark.jpg',
            'created_at' => date('Y-m-d H:i:s'),            
        ]);

        DB::table('artista')->insert([
            'nome' => 'Muse Band',
            'popularidade' => '8694.011',
            'foto' => 'albuns/muse.jpg',
            'created_at' => date('Y-m-d H:i:s'),            
        ]);
    }
}
