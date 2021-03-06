<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("verification_user_id");
            $table->string("verification_type");
            $table->string("verification_ID_type");
            $table->string("verification_ID_number");
            $table->string("verification_state_id")->default(11);
            $table->integer("verification_firstfile_id");
            $table->integer("verification_secondfile_id");
            $table->integer("verification_package")->nullable();
            $table->integer("verification_status_id")->default(10);
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
        Schema::dropIfExists('verifications');
    }
}
