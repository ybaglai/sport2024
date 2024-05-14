<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('competition_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('coach');
            $table->longText('description')->nullable();
            $table->boolean('apparatus_wa')->default(0)->nullable();
            $table->boolean('apparatus_hoop')->default(0)->nullable();
            $table->boolean('apparatus_rope')->default(0)->nullable();
            $table->boolean('apparatus_ball')->default(0)->nullable();
            $table->boolean('apparatus_clubs')->default(0)->nullable();
            $table->boolean('apparatus_ribbon')->default(0)->nullable();
            $table->string('max_checkboxes')->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
