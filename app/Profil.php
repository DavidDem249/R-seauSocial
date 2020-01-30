<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    
	protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
	
    public function post()
    {
        return $this->belongsTo('App\Post')->orderBy('created_at', 'DESC');
    }

    public function getPhotoProfile()
    {
    	$imagePath = $this->avatar ?? '/avatars-profil/default.png';

    	return "/storage/" . $imagePath;
    }

    public function getPhotoCouverture()
    {
    	$imagePath = $this->photo_couverture ?? '/photo-couverture/cover-def.png';

    	return "/storage/" . $imagePath;
    }
    
}
