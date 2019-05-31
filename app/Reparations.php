<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparations extends Model
{
   protected $table='reparations';
   protected $fillable=array('matricula','fecha','desrepara');
}
