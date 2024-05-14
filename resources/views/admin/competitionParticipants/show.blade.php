@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.competitionParticipant.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.competition-participants.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.id') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.fullname') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->fullname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.organization') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->organization }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.coach') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->coach }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.city') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.link_to_the_archive') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->link_to_the_archive }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.description') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.foto') }}
                        </th>
                        <td>
                            @if($competitionParticipant->foto)
                                <a href="{{ $competitionParticipant->foto->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $competitionParticipant->foto->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.status') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionParticipant->status ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.code') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->code }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.competition-participants.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#competition_participants_competition_groups" role="tab" data-toggle="tab">
                {{ trans('cruds.competitionGroup.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="competition_participants_competition_groups">
            @includeIf('admin.competitionParticipants.relationships.competitionParticipantsCompetitionGroups', ['competitionGroups' => $competitionParticipant->competitionParticipantsCompetitionGroups])
        </div>
    </div>
</div>

@endsection