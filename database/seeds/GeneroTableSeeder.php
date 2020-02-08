<?php

use Illuminate\Database\Seeder;

class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genero')->insert([
            'descricao' => 'Rock Alternativo',
            'created_at' => date('Y-m-d H:i:s'),                        
        ]);

        DB::table('genero')->insert([
            'descricao' => 'Indie Rock',  
            'created_at' => date('Y-m-d H:i:s'),                
        ]);

        DB::table('genero')->insert([
            'descricao' => 'New Wave',
            'created_at' => date('Y-m-d H:i:s'),                       
        ]);

        DB::table('genero')->insert([
            'descricao' => 'Pop Rock', 
            'created_at' => date('Y-m-d H:i:s'),                       
        ]);

        DB::table('genero')->insert([
            'descricao' => 'Rap Rock',
            'created_at' => date('Y-m-d H:i:s'),                       
        ]);

        DB::table('genero')->insert([
            'descricao' => 'Rock Eletrônico',
            'created_at' => date('Y-m-d H:i:s'),                       
        ]);

        DB::table('genero')->insert([
            'descricao' => 'Metal Alternativo',
            'created_at' => date('Y-m-d H:i:s'),                      
        ]);

        DB::table('genero')->insert([
            'descricao' => 'Hard Rock',
            'created_at' => date('Y-m-d H:i:s'),                      
        ]);

        DB::table('genero')->insert([
            'descricao' => 'Rock Progressivo',
            'created_at' => date('Y-m-d H:i:s'),                      
        ]);        
    }
}
