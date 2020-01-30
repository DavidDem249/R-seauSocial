<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthentificationController extends Controller
{

    
    public function authView()
    {

    	return View("pages.auths.sigin");
    }

    
    public function register()
    {
    	$valid = request()->validate([

    		'nom' => 'required|min:2',
    		'prenom' => 'required|min:3',
    		'adresse' => 'required',
    		'genre' => 'required',
    		'email' => 'bail|required|email',
    		'password' => 'required|min:8',
    		'password_conf' => 'same:password',
    	]);

    	//dd($valid['password_conf']);
    	if($valid)
    	{
    		$user = User::create([

	    		'nom' => $valid['nom'],
	    		'prenom' => $valid['prenom'],
	    		'adresse' => $valid['adresse'],
	    		'genre' => $valid['genre'],
	    		'email' => $valid['email'],
	    		'password' => bcrypt($valid['password']),
    		]);

    		$user->save();

    		return redirect()->back()->with('success','Inscription effectuée avec succès');
    	}else{
            return redirect()->back()->with('erreur_ins','Inscription non effectuée, veilliez réessayer à nouveau');
        }
    }

    public function login(){

    	$valid = request()->validate([

    		"email" => 'required|email',
    		"password" => 'required|min:8',

    	]);

        if($valid){

        	$result = auth()->attempt([

        		"email" => request('email'),
        		"password" => request('password'),
        	]);

            if($result)
            {
            	$user = auth()->user();
            	//dd($user->nom);
        		//return View("pages.index",compact("users"));
        		return redirect()->route('index')->with([
                    'success','Vous êtes maintenant connecté',
                    'user' => $user,
                ]);
                
            }
            else 
            {
                return redirect()->back()->with('erreur_con',"Email ou mot de passe invalide");
            }
        }
        else
        {
            return redirect()->back()->withErrors($valid);
        }
    }

    public function logout()
    {

    	auth()->logout();


    	return redirect()->route('auth.view')->with('success','Vous êtes maintenant déconnecté');
    }
}
