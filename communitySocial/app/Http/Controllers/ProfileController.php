<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profil;
use App\Post;
use App\Galery;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

	public function __construct()
	{
		return $this->middleware('auth');
	}
    
    public function profile(User $user)
    {
        //$this->authorize('update', $user->profil);

    	if(auth()->guest())
    	{
    		return redirect()->route('auth.view');
    	}
        

    	$userConnect = auth()->user();
        $user_id = $userConnect->id;
        //dd($user_id);
        $posts = $user->posts;
        $photos = $user->galeries;

    	return View('pages.profiles.profile',compact('user','userConnect','posts','photos'));
    }

    
    public function update(User $user)
    {

    	$this->authorize('update', $user->profil);

    	$val = request()->validate([

    		'facebook' => 'url',
            'twitter' => 'url',
            'instagram' => 'url',
    		'contact' => 'required|min:8',
    		'date_naiss' => 'required',
    		'job' => 'required',

    	]);

    	if($val){

    		auth()->user()->profil->update([

                'job' => $val['job'],
                'date_naissance' => $val['date_naiss'],
                'contact' => $val['contact'],
                'facebook' => $val['facebook'],
                'twitter' => $val['twitter'],
                'instagram' => $val['instagram'],
            ]);

    		return redirect()->back()->with(['success','Vos informations ont été mise à jour !']);

    	}else{
    		return redirect()->back()->with(['errors','Veillez remplir correctement les champs !']);
    	}
    	//dd(auth()->user()->email);
    }

    public function updateBio(User $user)
    {
    	$this->authorize('update', $user->profil);

    	$validate = request()->validate([

    		'bio' => 'required',
    	]);

    	if($validate){

	    	auth()->user()->profil->update([

	    		'biographie' => $validate['bio'],
	    	]);

	    	return redirect()->back()->with(['success','Vos informations ont été mise à jour !']);
	    }else{

	    	return redirect()->back()->with(['errors','Veillez remplir correctement les champs !']);
	    }
    }

    public function updateMp(User $user)
    {

    	$this->authorize('update', $user->profil);

    	$validate = request()->validate([

    		'name_papa' => 'required',
    		'name_mere' => 'required',
    	]);

    	if($validate){

	    	auth()->user()->profil->update([

	    		'nom_prenom_pere' => $validate['name_papa'],
	    		'nom_prenom_mere' => $validate['name_mere'],
	    	]);

	    	return redirect()->back()->with(['success','Vos informations ont été mise à jour !']);
	    }else{

	    	return redirect()->back()->with(['errors','Veillez remplir correctement les champs !']);
	    }

    }

    public function updatePhoto(Request $request, User $user)
    {

        //dd($user->profil);
        
        $data = request()->validate([

            'avatar' => 'sometimes|image|max:3000', 
        ]);

        $imagePath = request('avatar')->store('avatars-profil', 'public');
        $image = Image::make(public_path("/storage/{$imagePath}"))->fit(170, 170);
        //dd($image);
        $image->save();

        auth()->user()->profil->update([
            'avatar' => $imagePath,
        ]);

        return redirect()->back()->with(['success','Photo changée avec succès!']);
    }


    public function updatePhotoCouverture(User $user)
    {

        //dd($user->profil);
        $data = request()->validate([

            'photo_cov' => 'sometimes|image|max:3000', 
        ]);

        //dd($data);

        $imagePath = request('photo_cov')->store('photo-couverture', 'public');
        $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1600, 400);
        //dd($image);
        $image->save();

        auth()->user()->profil->update([
            'photo_couverture' => $imagePath,
        ]);

        return redirect()->back()->with(['success','Photo changée avec succès!']);
    }
}
