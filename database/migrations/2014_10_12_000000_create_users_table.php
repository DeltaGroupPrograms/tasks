<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id')->unsign()->index();
            $table->increments('id');
            $table->string('name');
            $table->string('family',50);
            $table->string('email');
            $table->string('password');
            $table->string('mobile');
            $table->string('permission',30);
            $table->integer('table_id');
            $table->string('status',30);
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
        Schema::dropIfExists('users');
    }
}
