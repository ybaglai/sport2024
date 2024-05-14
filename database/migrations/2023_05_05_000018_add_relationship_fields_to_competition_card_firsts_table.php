<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCompetitionCardFirstsTable extends Migration
{
    public function up()
    {
        Schema::table('competition_card_firsts', function (Blueprint $table) {
            $table->unsignedBigInteger('competition_participiant_id')->nullable();
            $table->foreign('competition_participiant_id', 'competition_participiant_fk_8411479')->references('id')->on('competition_participants');
            $table->unsignedBigInteger('competition_group_id')->nullable();
            $table->foreign('competition_group_id', 'competition_group_fk_8411480')->references('id')->on('competition_groups');
            $table->unsignedBigInteger('year_category_id')->nullable();
            $table->foreign('year_category_id', 'year_category_fk_8411481')->references('id')->on('year_categories');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_8411482')->references('id')->on('categories');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_8411545')->references('id')->on('users');
        });
    }
}
