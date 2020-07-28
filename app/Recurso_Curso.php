<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso_Curso extends Model
{
    protected $table = 'courses_resources';

    public function course()
    {
    	return $this->belongsTo('App\Course', 'course_id');
    }
}
