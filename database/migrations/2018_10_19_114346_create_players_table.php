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
            $table->integer("user_id")->unsigned();
            $table->integer("player_image_id")->unsigned();
            $table->integer("player_height");
            $table->integer("player_weight");
            $table->integer("player_facebook_id");
            $table->date("player_dob");
            $table->text('player_address');
            $table->integer("player_package_id")->unsigned();
            $table->string("player_gender");
            $table->integer("player_status_id")->unsigned();
            $table->string("player_position");
            $table->string("player_games_played");
            $table->integer("player_minutes_played");
            $table->integer("player_super_substitute");
            $table->integer("player_associate_team")->unsigned();
            $table->integer("player_associate_academic")->unsigned();
            $table->integer("player_associate_scout")->unsigned();
            $table->text("player_biography");
            $table->integer("player_team_spirit");
            $table->integer("player_passing_accuracy");
            $table->integer("player_ground_duel_winning");
            $table->integer("player_recovery");
            $table->integer("player_tackles_winning");
            $table->integer("player_clearance");
            $table->integer("player_blocking");
            $table->integer("player_interceptions");
            $table->integer("player_penalties_conceded");
            $table->integer("player_foul_winnings");
            $table->integer("player_goal_scoring");
            $table->integer("player_penalty_goals");
            $table->integer("player_successful_crosses");
            $table->integer("player_assist_ability");
            $table->integer("player_chances_creation");
            $table->integer("player_penalties_winnings");
            $table->integer("player_offsides");
            $table->foreign('user_id')->references('id')->on('users');
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
