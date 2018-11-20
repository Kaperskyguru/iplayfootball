<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('academic_firstname');
            $table->string('academic_lastname');
            $table->string('academic_email');
            $table->string('academic_mobile_phone');
            $table->integer('academic_picture_id');
            $table->integer('academic_height');
            $table->integer('academic_weight');
            $table->integer('academic_facebook_id');
            $table->datetime('academic_dob');
            $table->text('academic_address');
            $table->integer('academic_package_id');
            $table->string('academic_sex');
            $table->string('academic_status_id');
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
        Schema::dropIfExists('academies');
    }
}
