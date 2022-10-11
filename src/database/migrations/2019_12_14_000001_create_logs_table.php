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
            $t->text('message')->nullable();
            $t->longText('context')->nullable();
            $t->string('level')->nullable();
            $t->string('level_name')->nullable();
            $t->string('channel')->nullable();
            $t->string('datetime')->nullable();
            $t->integer('user_id')->nullable();
            $t->text('user_detail')->nullable();
            $t->string('origin', 200)->nullable();
            $t->ipAddress('ip')->nullable();
            $t->string('user_agent', 200)->nullable();
            $t->string('token', 200)->nullable();
            $t->string('type', 200)->nullable();
            $t->string('result', 200)->nullable();
            $t->string('description', 200)->nullable();
            $t->timestamps();
            $t->softDeletes();
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
