<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{



    public function categoria(){
    	return $this->belongsTo('App\Service_Category', 'service_category_id');
    }

    public function peticiones()
    {
    	return $this->hasMany('App\Service_Request');
    }

    public function images()
    {
    	return $this->hasMany('App\Service_Image');
    }
}
