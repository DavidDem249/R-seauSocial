<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('posts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('posts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_posts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('user_posts', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('posts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('participations', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('participations', function(Blueprint $table) {
			$table->foreign('event_id')->references('id')->on('events')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('suivres', function(Blueprint $table) {
			$table->foreign('user_suivi_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('suivres', function(Blueprint $table) {
			$table->foreign('user_suiveur_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('posts', function(Blueprint $table) {
			$table->dropForeign('posts_user_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_user_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_post_id_foreign');
		});
		Schema::table('events', function(Blueprint $table) {
			$table->dropForeign('events_user_id_foreign');
		});
		Schema::table('user_posts', function(Blueprint $table) {
			$table->dropForeign('user_posts_user_id_foreign');
		});
		Schema::table('user_posts', function(Blueprint $table) {
			$table->dropForeign('user_posts_post_id_foreign');
		});
		Schema::table('participations', function(Blueprint $table) {
			$table->dropForeign('participations_user_id_foreign');
		});
		Schema::table('participations', function(Blueprint $table) {
			$table->dropForeign('participations_event_id_foreign');
		});
		Schema::table('suivres', function(Blueprint $table) {
			$table->dropForeign('suivres_user_suivi_id_foreign');
		});
		Schema::table('suivres', function(Blueprint $table) {
			$table->dropForeign('suivres_user_suiveur_id_foreign');
		});
	}
}