<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationworks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('workid');
            $table->integer('userid');
            $table->date('begindate');
            $table->date('enddate');
            $table->string('status',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationworks');
    }
}
