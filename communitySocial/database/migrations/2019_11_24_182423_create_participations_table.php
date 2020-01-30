<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipationsTable extends Migration {

	public function up()
	{
		Schema::create('participations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('user_id')->unsigned();
			$table->integer('event_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('participations');
	}
}