<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionParticipantsTable extends Migration
{
    public function up()
    {
        Schema::create('competition_participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('surname');
            $table->string('name');
            $table->string('fullname')->nullable();
            $table->string('organization')->nullable();
            $table->string('coach')->nullable();
            $table->string('city')->nullable();
            $table->string('link_to_the_archive')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->string('code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
