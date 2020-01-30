<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    protected $guarded = [];
    protected $table = 'messages';
    //public $timestamps = true;

    public function from()
    {
    	return $this->belongsTo(User::class, 'from_id');
    }

}
