<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type')->nullable();
            $table->string('year_of_birth')->nullable();
            $table->string('description')->nullable();
            $table->string('app_1')->nullable();
            $table->string('app_2')->nullable();
            $table->string('app_3')->nullable();
            $table->string('app_4')->nullable();
            $table->string('app_5')->nullable();
            $table->string('app_6')->nullable();
            $table->string('app_in_final')->nullable();
            $table->string('number_of_competitions')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
