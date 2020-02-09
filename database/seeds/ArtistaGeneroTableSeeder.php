<?php

use Illuminate\Database\Seeder;

class ArtistaGeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artista_genero')->insert([
            'id_artista' => 1,
            'id_genero' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 1,
            'id_genero' => 2,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 1,
            'id_genero' => 3,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 1,
            'id_genero' => 4,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 2,
            'id_genero' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 2,
            'id_genero' => 5,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 2,
            'id_genero' => 6,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 2,
            'id_genero' => 7,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 3,
            'id_genero' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 3,
            'id_genero' => 8,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('artista_genero')->insert([
            'id_artista' => 3,
            'id_genero' => 9,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
