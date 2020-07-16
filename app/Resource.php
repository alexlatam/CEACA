<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function plans()
    {
    	return $this->belongsToMany('App\Plan', 'plan_resource', 'resource_id', 'plan_id');
    }
}
