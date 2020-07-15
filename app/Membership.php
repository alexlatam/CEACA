<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    public function resources()
    {
    	return $this->belongsToMany('App\Resource', 'membership_resource', 'membership_id', 'resource_id');
    }
}
