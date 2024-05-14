<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionCardFirstsTable extends Migration
{
    public function up()
    {
        Schema::create('competition_card_firsts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('db_1', 5, 3)->nullable();
            $table->float('db_2', 5, 3)->nullable();
            $table->float('db_3', 5, 3)->nullable();
            $table->float('db_4', 5, 3)->nullable();
            $table->float('db', 5, 3)->nullable();
            $table->float('da_1', 5, 3)->nullable();
            $table->float('da_2', 5, 3)->nullable();
            $table->float('da_3', 5, 3)->nullable();
            $table->float('da_4', 5, 3)->nullable();
            $table->float('ded', 5, 3)->nullable();
            $table->float('da', 5, 3)->nullable();
            $table->float('a_1', 5, 3)->nullable();
            $table->float('a_2', 5, 3)->nullable();
            $table->float('a_4', 5, 3)->nullable();
            $table->float('a_3', 5, 3)->nullable();
            $table->float('a', 5, 3)->nullable();
            $table->float('e_1', 5, 3)->nullable();
            $table->float('e_2', 5, 3)->nullable();
            $table->float('e_3', 5, 3)->nullable();
            $table->float('e_4', 5, 3)->nullable();
            $table->float('e', 5, 3)->nullable();
            $table->float('db_plus_da', 5, 3)->nullable();
            $table->float('a_panel', 5, 3)->nullable();
            $table->float('e_panel', 5, 3)->nullable();
            $table->float('overall_score', 5, 3)->nullable();
            $table->integer('place')->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->boolean('evaluated')->default(0)->nullable();
            $table->string('code')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
