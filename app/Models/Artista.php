<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model 
{
    protected $table = 'artista';

    public function generos() 
    {        
        return $this->belongsToMany('App\Models\Genero', 'artista_genero', 'id_artista', 'id');
    }

    public function albuns()
    {
        return $this->belongsToMany('App\Models\Album', 'artista_album', 'id_artista', 'id');
    }
}