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
            $table->string('type');
            $table->string('fig_licence_nr')->nullable();
            $table->string('national_lic')->nullable();
            $table->string('surname');
            $table->string('name');
            $table->string('fullname')->nullable();
            $table->string('year_of_birth')->nullable();
            $table->string('coaches')->nullable();
            $table->string('age_group')->nullable();
            $table->string('organization')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('link_to_the_archive')->nullable();
            $table->longText('description')->nullable();
            $table->string('max_checkboxes')->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->boolean('apparatus_wa')->default(0)->nullable();
            $table->boolean('apparatus_rope')->default(0)->nullable();
            $table->boolean('apparatus_hoop')->default(0)->nullable();
            $table->boolean('apparatus_ball')->default(0)->nullable();
            $table->boolean('apparatus_clubs')->default(0)->nullable();
            $table->boolean('apparatus_ribbon')->default(0)->nullable();
            $table->string('apparatus_wa_logo')->nullable();
            $table->string('apparatus_rope_foto')->nullable();
            $table->string('apparatus_hoop_foto')->nullable();
            $table->string('apparatus_ball_foto')->nullable();
            $table->string('apparatus_clubs_foto')->nullable();
            $table->string('apparatus_ribbon_foto')->nullable();
            $table->string('code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
