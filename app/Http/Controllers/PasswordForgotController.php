<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;

use App\Mail\PasswordForgot;

class PasswordForgotController extends Controller
{
  
  	public function passForgot()
    {
    	return View("pages.auths.password_forgot");
    }
  

    public function recup(Request $request)
    {
    	$validate = $request->validate([

    		"email" => 'required|email',
    	]);

    	$user = User::whereEmail($request->email)->first();
    	//$phone = $user->profil->contact;
    	

    	if($user != null)
    	{

    		$email = $user->email;
            $name = $user->nom;
            
	        $code = $this->randomPassword();
	        $user->password = bcrypt($code);
	        $user->save();

	        Mail::to($email)->send(new PasswordForgot($user,$code));

    		return redirect()->back()->with(['success' => 'Nous venons de vous envoyer vos identifiants de connexion sur votre adresse email, '.$name]);
    	}
    	else{

    		return redirect()->back()->with(['errors' => 'Vôtre adresse email n\'existe pas? ']);
    	}
    	//dd($email);
    }


    private function randomPassword()
    {
        $lettre = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $lettreLen = strlen($lettre) - 1;
        for($i=0;$i<8;$i++)
        {
            $n = rand(0, $lettreLen);
            $pass[] = $lettre[$n];
        }
        return implode($pass);
    }

}
