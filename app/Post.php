<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function profil()
    {
    	return $this->belongsTo("App\Profil");
    }
}