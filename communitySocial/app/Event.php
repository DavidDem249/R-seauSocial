<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model 
{

    protected $table = 'events';
    public $timestamps = true;
    protected $guarded = array('title', 'content', 'date_event', 'lieu');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}