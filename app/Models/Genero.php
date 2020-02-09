<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model 
{
    protected $table = 'genero';

    public function artistas() 
    {        
        return $this->belongsToMany('App\Models\Artista', 'artista_genero', 'id_genero', 'id');
    }
}