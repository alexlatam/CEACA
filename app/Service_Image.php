<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_Image extends Model
{
    protected $table = 'service_images';

    public function service()
    {
    	return $this->belongsTo('App\Service');
    }
}
