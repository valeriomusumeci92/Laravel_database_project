<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model

// FOR THIS MODEL I WILL CREATE THE RELATIVE CONTROLLER, AFTER CREATING A MODEL INDEED I M GONNA CREATE THORUGH THE COMMAND TERMINAL ''PHP ARTISAN MAKE:CONTROLLER ARTISTCONTROLLER' the controller for this model that would be showd in the folder http > controllers
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre',
        'band',
        'img',
        
    ];
}
