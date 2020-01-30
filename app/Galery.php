<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
	
    protected $table = 'galeries';
	protected $guarded = [''];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
