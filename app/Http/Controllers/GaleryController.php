<?php

namespace App\Http\Controllers;
use App\User;
use App\Galery;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class GaleryController extends Controller
{

	public function __construct()
	{
		return $this->middleware('auth');
	}
    
    public function store(User $user)
    {

    	$data = request()->validate([

    		'photo_galerie' => 'required|image|max:3000',
    	]);

    	//$user_id = auth()->user();

    	$imagePath = request('photo_galerie')->store('galerie-photo', 'public');
        $image = Image::make(public_path("/storage/{$imagePath}"))->fit(255, 255);
        //dd($image);
        $image->save();

        auth()->user()->galeries()->create([

            'photo_galerie' => $imagePath,

        ]);

        return redirect()->back()->with(['success','Photo changée avec succès!']);
    }

    public function show(User $user)
    {

    	$photos = $user->galeries;
    	dd($photos);
    	return View('pages.profiles.profile',compact('photos'));
    }
}
