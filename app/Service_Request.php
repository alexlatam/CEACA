<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_Request extends Model
{
    protected $table = 'service_requests';

    public function servicio()
    {
    	return $this->belongsTo('App\Service', 'service_id');
    }
}
