<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model 
{

    protected $table = 'comments';
    public $timestamps = true;
    protected $guarded = array('content');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}