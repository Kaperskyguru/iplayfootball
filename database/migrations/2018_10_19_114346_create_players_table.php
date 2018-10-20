<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string("player_firstname");
            $table->string("player_lastname");
            $table->string("player_username");
            $table->string("player_password");
            $table->string("player_email");
            $table->integer("player_image_id");
            $table->integer("player_height");
            $table->integer("player_weight");
            $table->integer("player_facebook_id");
            $table->date("player_dob");
            $table->text('player_address');
            $table->integer("player_package_id");
            $table->string("player_gender");
            $table->integer("player_status_id");
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
        Schema::dropIfExists('players');
    }
}
