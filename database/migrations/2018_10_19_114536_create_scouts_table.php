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
            $table->string("scout_firstname");
            $table->string("scout_lastname");
            $table->string("scout_username");
            $table->string("scout_password");
            $table->string("scout_email");
            $table->integer("scout_image_id");
            $table->string("scout_mobile");
            $table->text("scout_licence");
            $table->integer("scout_team_id");
            $table->date("scout_dob");
            $table->text('scout_address');
            $table->text("scout_notes");
            $table->string("scout_gender");
            $table->integer("scout_status_id");
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
        Schema::dropIfExists('scouts');
    }
}
