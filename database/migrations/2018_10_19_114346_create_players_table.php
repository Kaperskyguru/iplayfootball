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
            $table->string('player_name')->nullable();
            $table->integer('user_id');
            $table->string('player_phone')->nullable();
            $table->string('player_state')->nullable();
            $table->string('player_email')->nullable()->unique();
            $table->string("player_image_id")->nullable();
            $table->integer("player_height")->nullable();
            $table->integer("player_weight")->nullable();
            $table->string("player_facebook_id")->nullable();
            $table->date("player_dob")->nullable();
            $table->text('player_address')->nullable();
            $table->string("player_package_id")->default(19)->nullable();
            $table->string("player_gender")->nullable();
            $table->integer("player_status_id")->unsigned();
            $table->string("player_position")->nullable();
            $table->string("player_games_played")->default(0)->nullable();
            $table->string("player_minutes_played");
            $table->string("player_super_substitute")->nullable();
            $table->integer("player_associate_team")->nullable()->unsigned();
            $table->integer("player_associate_academic")->nullable()->unsigned();
            $table->integer("player_associate_scout")->nullable()->unsigned();
            $table->text("player_biography")->nullable();
            $table->string("player_team_spirit")->nullable();
            $table->string("player_passing_accuracy")->nullable();
            $table->string("player_ground_duel_winning")->nullable();
            $table->string("player_ariel_duel_winning")->nullable();
            $table->string("player_recovery")->nullable();
            $table->string("player_tackles_winning")->nullable();
            $table->string("player_clearance")->nullable();
            $table->string("player_blocking")->nullable();
            $table->string("player_interceptions")->nullable();
            $table->string("player_penalties_conceded")->nullable();
            $table->string("player_foul_winnings")->nullable();
            $table->string("player_goal_scoring")->nullable();
            $table->string("player_penalty_goals")->nullable();
            $table->string("player_successful_crosses")->nullable();
            $table->string("player_ariel_duel_winning")->nullable();
            $table->string("player_shooting_accuracy")->nullable();
            $table->string("player_assist_ability")->nullable();
            $table->string("player_chances_creation")->nullable();
            $table->string("player_penalties_winnings")->nullable();
            $table->string("player_offsides")->nullable();
            // $table->foreign('player_associate_team')->references('id')->on('teams');
            // $table->foreign('player_associate_academic')->references('id')->on('academics');
            // $table->foreign('player_associate_scout')->references('id')->on('scouts');
            // $table->foreign('player_status_id')->references('id')->on('statuses');
            // $table->foreign('player_package_id')->references('id')->on('packages');
            // $table->foreign('player_image_id')->references('id')->on('images');
            $table->timestamps();
        });

        Schema::table('players', function($table)
        {

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
