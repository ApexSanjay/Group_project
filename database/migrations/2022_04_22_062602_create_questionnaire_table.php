<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Questionnaire', function (Blueprint $table) {
        $table->increments('questionaireID');
        $table->integer('memberID');
        $table->string('firstName');
        $table->string('lastName');
        $table->string('activity');
        $table->integer('instructorRating');
        $table->integer('activityRating');
        $table->string('futureParticipation');
        $table->text('feedback');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionaire');
    }
};
