<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIventsTable extends Migration
{
    public function up()
    {
        Schema::create('ivents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('private')->default(0)->nullable();
            $table->boolean('virtual')->default(0)->nullable();
            $table->date('date')->nullable();
            $table->date('date_to')->nullable();
            $table->string('event_name')->nullable();
            $table->string('place')->nullable();
            $table->string('country')->nullable();
            $table->date('deadline')->nullable();
            $table->date('deadline_d_form_and_mp_3')->nullable();
            $table->string('organizer')->nullable();
            $table->longText('contact')->nullable();
            $table->longText('notes')->nullable();
            $table->boolean('allow_volunteers_registration')->default(0)->nullable();
            $table->date('volunteers_from')->nullable();
            $table->date('volunteers_to')->nullable();
            $table->boolean('allow_meal_form')->default(0)->nullable();
            $table->string('meal_from')->nullable();
            $table->date('meal_to')->nullable();
            $table->boolean('media_registration')->default(0)->nullable();
            $table->boolean('travel_form')->default(0)->nullable();
            $table->boolean('hotel_form')->default(0)->nullable();
            $table->boolean('visa_form')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
