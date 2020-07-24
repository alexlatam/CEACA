<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    protected $table = "capacitaciones";

    public function categoria()
    {
    	return $this->belongsTo('App\Cat_capacitacion', 'cat_capacitaciones_id');
    }
}
