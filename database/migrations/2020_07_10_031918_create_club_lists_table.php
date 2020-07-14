<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('age_level');
            $table->string('logo');
            $table->string('cover');
            $table->string('assitant_name');
            $table->string('assitant_number');
            $table->string('assitant_email');
            $table->string('assitant_level');
            $table->string('assitant_photo');
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
        Schema::dropIfExists('club_lists');
    }
}
