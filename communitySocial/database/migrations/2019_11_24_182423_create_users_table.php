<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('provider_user_id')->nullable();
          	$table->string('provider')->nullable();
			$table->string('nom', 50);
			$table->string('prenom', 100);
			$table->string('adresse', 100);
			#$table->enum('genre', array('Masculin', 'Féminin', 'Autre'));
			$table->string('genre');
			//$table->string('photo', 255)->nullable();
			$table->string('email', 255)->unique();
			$table->string('password', 255);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}