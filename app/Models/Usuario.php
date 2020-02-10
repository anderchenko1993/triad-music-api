<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model 
{
    protected $table = 'usuario';
    protected $fillable = [
        'id_user_google', 'name', 'token', 
    ];
    public $timestamps = true; 
}