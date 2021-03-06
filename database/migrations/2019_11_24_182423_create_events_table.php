<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 180);
			$table->text('content');
			$table->date('date_event');
			$table->string('lieu', 255);
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('events');
	}
}