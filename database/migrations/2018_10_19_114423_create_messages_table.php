<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string("message_subject");
            $table->longText("message_body");
            $table->integer("message_type")->nullable();
            $table->integer("message_sender_id");
            $table->string("message_receiver_id");
            $table->string('message_sender_role')->nullable();
            $table->string('message_receiver_role')->nullable();
            $table->integer('message_status_id')->default(15);
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
        Schema::dropIfExists('messages');
    }
}
