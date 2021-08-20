<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    public function Materia(){
        return $this->hasOne('App\Models\Materia','usuario_id','id');
    }
    public function Materias(){
        return $this->hasMany('App\Models\Materia','usuario_id','id');

    }

}
