<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artistas extends Model
{
    protected $table = 'personas';
    protected $fillable = ["Artista","Obra","Epoca","QR"];
}
