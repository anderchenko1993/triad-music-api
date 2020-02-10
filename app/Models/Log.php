<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model 
{
    protected $table = 'log';
    protected $fillable = [
        'full_url', 'method', 'user_agent', 'status' 
    ];
    public $timestamps = true; 
}