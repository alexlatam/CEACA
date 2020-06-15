<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{



    public function categoria(){
    	return $this->belongsTo('App\Service_Category');
    }

    public function requests()
    {
    	return $this->hasMany('App\Service_Request');
    }

    public function images()
    {
    	return $this->hasMany('App\Service_Image');
    }
}
