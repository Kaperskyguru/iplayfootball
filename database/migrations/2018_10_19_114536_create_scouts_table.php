<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scouts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("scout_image_id");
            $table->string('scout_name');
            $table->string('scout_phone');
            $table->string('scout_state');
            $table->string('scout_email')->unique();
            $table->text("scout_licence");
            $table->integer("scout_team_id");
            $table->date("scout_dob");
            $table->text('scout_address');
            $table->text("scout_notes");
            $table->string("scout_gender");
            $table->integer("scout_status_id");
            $table->timestamps();
        });

        Schema::table('scouts', function($table)
        {
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('scout_team_id')->references('id')->on('teams');
            // $table->foreign('scout_image_id')->references('id')->on('images');
            // $table->foreign('scout_status_id')->references('id')->on('statuses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scouts');
    }
}
