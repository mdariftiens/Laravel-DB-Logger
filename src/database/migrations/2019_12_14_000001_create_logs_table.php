<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $t) {
            $t->id();
            $t->text('title')->nullable();
            $t->text('description')->nullable();
            $t->string('origin', 200)->nullable();
            $t->string('token', 100)->nullable();
            $t->ipAddress('ip')->nullable();
            $t->integer('user_id')->nullable();
            $t->text('user_detail')->nullable();
            $t->string('user_agent', 200)->nullable();
            $t->string('session', 100)->nullable();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
