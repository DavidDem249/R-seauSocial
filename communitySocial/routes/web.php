
<?php

// Route::get('/', function () {
//     return view('welcome');
// });


//====================== Authentification facebook ===============
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('auth/callback', 'SocialAuthFacebookController@callback');
//===============================================================//

//===========================Page accueil ========================
Route::get('/s_community','HomepageController@index')->name('index');
//================================================================

//Route::resource('auth','AuthentificationController')->only(['authView'])->names(['authView' => 'auth.index']);
//==========================Authentifications get===============================
Route::get('/','AuthentificationController@authView')->name('auth.view');
Route::get('/password_forgot','PasswordForgotController@passForgot')->name('form_pass_forgot');

Route::get('/déconnexion','AuthentificationController@logout')->name('logout');
//====================================================================//

//==========================Authentifications post===============================
Route::post('/auth/register','AuthentificationController@register')->name('register');
Route::post("/auth/login",'AuthentificationController@login')->name('login');
Route::post("/password_forgot",'PasswordForgotController@recup')->name('password.recup');
//==============================================================================

//=====================Création de posts =============================//
Route::post("/post/create",'PostController@store')->name('post.create');

//========================================================================//

//=========================Route get Profile utilisateur==================//
Route::get('/s_community/profiles','ProfilesController@profiles')->name('users.profiles');
Route::get('/s_community/profiles/profile/{user}','ProfilesController@voirProfile')->name('voir.profile');

Route::get('/s_community/profile/{user}','ProfileController@profile')->name('profile');

//==================================================================================//

//====================Route post et patch Profile user =======================//
Route::post('/s_community/profile/update/{user}','ProfileController@update')->name('update');

Route::post('/s_community/profile/update2/{user}','ProfileController@updateBio')->name('update.bio');

Route::post('/s_community/profile/update3/{user}','ProfileController@updateMp')->name('update.famille');

Route::patch("/s_community/profile/updatephoto/{user}","ProfileController@updatePhoto")->name('profil.photo');

Route::patch("/s_community/profile/updatephotoCov/{user}","ProfileController@updatePhotoCouverture")->name('couver.photo');

//=========================================================================//

//========================================================================//

Route::patch("/s_community/profile/photogalerie/{user}",'GaleryController@store')->name('store.galerie');


//====================================Messages==============================//

Route::get('/s_community/messages','MessageController@messagepage')->name('message.create');

Route::get('/conversation/{user}','MessageController@show')
	->middleware('can:talkTo,user')
	->name('conversation.show');

Route::post('/conversation/{user}','MessageController@store')->middleware('can:talkTo,user');
//========================================================================//

//===========================Changer mot de passe ===========================================

Route::get('/s_community/profile/change-mot-de-passe/{user}','HomepageController@viewPasswordChange')->name('pass.change');

Route::post('/s_community/profile/change-mot-de-passe/{user}','HomepageController@passwordChange')->name('password.change');

// Route::resource('event', 'EventController');
// Route::resource('user_post', 'User_postController');
// Route::resource('participation', 'ParticipationController');
// Route::resource('suivre', 'SuivreController');

