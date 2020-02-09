<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ArtistaTableSeeder::class,      
            AlbumTableSeeder::class,      
            GeneroTableSeeder::class,
            ArtistaAlbumSeeder::class,
            ArtistaGeneroSeeder::class,
        ]);
    }
}
