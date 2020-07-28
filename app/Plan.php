<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = "plans";

    public function resources()
    {
    	return $this->belongsToMany('App\Resource', 'plan_resource', 'plan_id', 'resource_id');
    }

    public function courses()
    {
    	return $this->hasMany('App\Course');
    }
}
