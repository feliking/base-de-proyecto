<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    protected $fillable = ['nombre', 'distrito', 'direccion', 'capacidad'];
    public $timestamps = false;

    public function maestros(){
      return $this->hasMany(Maestro::class);
    }
}
