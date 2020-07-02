<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_Category extends Model
{
     protected $table = 'course_categories';

     public function cursos()
     {
     	return $this->hasMany('App\Course');
     }
}
