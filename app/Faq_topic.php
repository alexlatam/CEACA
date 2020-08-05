<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq_topic extends Model
{
    public function faqs()
     {
     	return $this->hasMany('App\Faq');
     }
    
}
