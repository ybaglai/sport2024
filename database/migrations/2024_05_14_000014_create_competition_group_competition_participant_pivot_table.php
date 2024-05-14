<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionGroupCompetitionParticipantPivotTable extends Migration
{
    public function up()
    {
        Schema::create('competition_group_competition_participant', function (Blueprint $table) {
            $table->unsignedBigInteger('competition_group_id');
            $table->foreign('competition_group_id', 'competition_group_id_fk_8449872')->references('id')->on('competition_groups')->onDelete('cascade');
            $table->unsignedBigInteger('competition_participant_id');
            $table->foreign('competition_participant_id', 'competition_participant_id_fk_8449872')->references('id')->on('competition_participants')->onDelete('cascade');
        });
    }
}
