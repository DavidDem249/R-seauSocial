<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuivresTable extends Migration {

	public function up()
	{
		Schema::create('suivres', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_suivi_id')->unsigned();
			$table->integer('user_suiveur_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('suivres');
	}
}