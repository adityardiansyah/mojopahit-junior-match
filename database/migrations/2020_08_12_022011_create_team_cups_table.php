<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamCupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_cups', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id')->unsigned();
            $table->integer('group');
            $table->integer('play')->nullable();
            $table->integer('win')->nullable();
            $table->integer('draw')->nullable();
            $table->integer('lost')->nullable();
            $table->integer('point')->nullable();
            $table->integer('note')->nullable();
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
        Schema::dropIfExists('team_cups');
    }
}
