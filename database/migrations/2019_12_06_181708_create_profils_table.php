<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_prenom_pere', 255)->nullable();
            $table->string('nom_prenom_mere', 255)->nullable();
            $table->string('contact', 20)->unique()->nullable();
            $table->string('job', 180)->nullable();
            $table->text('biographie')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('avatar')->nullable();
            $table->string('photo_couverture')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profils');
    }
}
