<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatterMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatter_messages', function (Blueprint $table) {
	        $table->increments('id');
	        $table->timestamps();
	        $table->softDeletes();
	        $table->text('content');
	        $table->integer('user_id');
	        $table->boolean('is_seen')->default(0);
	        $table->integer('chatter_group_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatter_messages');
    }
}
