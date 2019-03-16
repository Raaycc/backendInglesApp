<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palavras extends Model
{
    protected $fillable = [ "palavra" , "traducao" ];
}
