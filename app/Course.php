<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function category()
    {
    	return $this->belongsTo('App\Course_Category');
    }

    public function requests()
    {
    	return $this->hasMany('App\Course_Request');
    }

}
