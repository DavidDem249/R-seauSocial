<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function __construct()
    {
    	return $this->middleware('auth');
    }

    public function profiles(User $user)
    {
    	if(auth()->guest())
    	{
    		return redirect()->route('auth.view');
    	}

    	$users = User::all();
    	//dd($user);
        $userConnect = auth()->user();
    	$user = auth()->user();
    	
    	return View('pages.profiles.profiles_users',compact('users','userConnect','user'));
    }

    public function voirProfile($user)
    {
    	$user = User::find($user);
    	$userConnect = auth()->user();
        $posts = $user->posts;
        $photos = $user->galeries;
    	return View('pages.profiles.profile',compact('user','userConnect','posts','photos'));
    }
}
