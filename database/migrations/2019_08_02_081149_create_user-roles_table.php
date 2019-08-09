<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_roles', function (Blueprint $table){
        $table->bigIncrements('id');
        $table->unsignedBigInteger('user_id')->index();
        $table->unsignedBigInteger('role_id')->index();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('role_id')->references('id')->on('role_names');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
