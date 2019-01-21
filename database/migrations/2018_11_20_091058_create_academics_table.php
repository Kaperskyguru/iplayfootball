<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('academic_name');
            $table->string('academic_phone');
            $table->string('academic_state')->nullable();
            $table->string('academic_email')->unique();
            $table->text('academic_image_id')->nullable();
            $table->string('academic_facebook_id')->nullable();
            $table->text('academic_address');
            $table->integer('academic_package_id')->unsigned();
            $table->integer('academic_status_id')->unsigned();
            // $table->foreign('academic_status_id')->references('id')->on('statuses');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('academic_package_id')->references('id')->on('packages');
            // $table->foreign('academic_image_id')->references('id')->on('images');
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
        Schema::dropIfExists('academics');
    }
}
