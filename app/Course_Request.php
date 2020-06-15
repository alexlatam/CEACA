<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_Request extends Model
{
    protected $table = 'course_requests';

    public function curso()
    {
    	return $this->belongsTo('App\Course', 'course_id');
    }
}
