<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model 
{
    protected $table = 'historico';

    public function artista() {
        return $this->belongsTo('App\Models\Artista', 'id_artista', 'id');
    }
}