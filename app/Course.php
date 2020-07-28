<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function categoria()
    {
    	return $this->belongsTo('App\Course_Category', 'course_category_id');
    }

    public function requests()
    {
    	return $this->hasMany('App\Course_Request');
    }

    public function plan()
    {
    	return $this->belongsTo('App\Plan', 'plan_id');
    }
}
