<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Album extends Model 
{
    protected $table = 'album';

    public function artistas() 
    {
        return $this->belongsToMany('App\Models\Artista', 'artista_genero', 'id_album', 'id');
    }
}