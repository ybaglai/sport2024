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
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
