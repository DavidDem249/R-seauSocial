<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class User extends Model implements Authenticatable
{

    use Notifiable;

    use BasicAuthenticatable;

    protected $table = 'users';
    public $timestamps = true;
    protected $guarded = [''];

    public function posts()
    {
        return $this->hasMany('App\Post')->orderBy('created_at', 'DESC');
    }

    public function galeries()
    {
        return $this->hasMany('App\Galery')->orderBy('created_at', 'DESC');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('created_at', 'DESC');
    }

    public function events()
    {
        return $this->hasMany('App\Event')->orderBy('created_at', 'DESC');
    }

    public function profil()
    {
        return $this->hasOne('App\Profil');
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
    
    protected static function boot()
    {
        parent::boot();

        static::created( function($user) {

            $user->profil()->create([

                "user_id" => $user->id,

            ]);

        });
    }

}