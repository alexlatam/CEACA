<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function topico()
    {
    	return $this->belongsTo('App\Faq_topic', 'faq_topic_id');
    }
}
