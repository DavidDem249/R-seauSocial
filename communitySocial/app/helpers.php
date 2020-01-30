<?php 

use App\User;
use App\Post;
use App\Profil;

function getAuteurNom($auteur_id)
{
	$user = User::find($auteur_id);
	return $user->nom;
}

function getAuteurPrenom($auteur_id)
{
	$user = User::find($auteur_id);
	return $user->prenom;
}

function getAuteurJob($auteur_id)
{
	$user = Profil::find($auteur_id);
	return $user->job;
}

function getAuteurPhoto($auteur_id)
{
	$user = Profil::find($auteur_id);
	return $user->avatar;
}

function getAuteurVille($auteur_id)
{
	$user = User::find($auteur_id);
	return $user->adresse;
}