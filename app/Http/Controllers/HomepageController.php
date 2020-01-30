<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class HomepageController extends Controller
{


    public function __construct()
    {
        return $this->middleware('auth');
    }
    
    public function index(User $user)
    {
        //$this->authorize('update', $user);

    	if(auth()->guest())
    	{
    		return redirect()->route('auth.view');
    	}
        
    	$user = auth()->user();
        $posts = Post::paginate(2);
        $users = User::all();

        $familles = User::all()->where('nom','=',$user->nom);
        //dd($familles);
    	return View("pages.index", compact("user","users","posts","familles"));
    }

    public function viewPasswordChange(User $user)
    {

        if(auth()->guest())
        {
            return redirect()->route('auth.view');
        }

        //dd($user);
        return View('pages.auths.pass_change',compact('user'));
    }

    public function passwordChange(Request $request, User $user)
    {
        $valide = $request->validate([
            "password_old" => 'required|min:8',
            "password" => 'required|min:8',
            "password_repeat" => 'required|same:password',
        ]);

        if($valide)
        {
            $password_old_champ = $valide['password_old'];
            $password_repeat_champ = $valide['password_repeat'];
            $password_champ = $valide['password'];

            $password_hash = $user->password;

            if(password_verify($password_old_champ, $password_hash))
            {
                if($password_champ == $password_repeat_champ)
                {   
                    auth()->user()->update([
                        'password' => bcrypt($valide['password']),
                    ]);

                }else{
                    return redirect()->back()->with(['erreur_pass' => 'Les mots de passe doivent être identique']);
                }
                return redirect()->route('index')->with('success','Votre mot de passe a bien été modifié avec succès');

            }else{

                return redirect()->back()->with(['erreur' => "Ce mot de passe n'exitse pas!"]);
            }
        }
    }
}
