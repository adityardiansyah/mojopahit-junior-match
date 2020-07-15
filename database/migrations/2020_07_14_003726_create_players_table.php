<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_list_id');
            $table->string('name');
            $table->string('nickname');
            $table->string('address');
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->string('back_number')->nullable();
            $table->string('date_born');
            $table->integer('goal')->nullable();
            $table->string('assist')->nullable();
            $table->string('from_school')->nullable();
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
        Schema::dropIfExists('players');
    }
}
