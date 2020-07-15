<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    public function memberships()
    {
    	return $this->belongsToMany('App\Membership', 'membership_resource', 'resource_id', 'membership_id');
    }
}
