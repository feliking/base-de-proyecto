<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $fillable = ['ci', 'nombre', 'colegio_id', 'materia', 'experiencia', 'image'];
    public $timestamps = false;

    public function colegio(){
      return $this->belongsTo(Colegio::class);
    }
}
