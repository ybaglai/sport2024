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
                            {{ trans('cruds.competitionParticipant.fields.type') }}
                        </th>
                        <td>
                            {{ App\Models\CompetitionParticipant::TYPE_SELECT[$competitionParticipant->type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.fig_licence_nr') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->fig_licence_nr }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.national_lic') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->national_lic }}
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
                            {{ trans('cruds.competitionParticipant.fields.year_of_birth') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->year_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.coaches') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->coaches }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.age_group') }}
                        </th>
                        <td>
                            {{ App\Models\CompetitionParticipant::AGE_GROUP_SELECT[$competitionParticipant->age_group] ?? '' }}
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
                            {{ trans('cruds.competitionParticipant.fields.country') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->country }}
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
                            {{ trans('cruds.competitionParticipant.fields.email') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.contact_address') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->contact_address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.category') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->category->name ?? '' }}
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
                            {{ trans('cruds.competitionParticipant.fields.max_checkboxes') }}
                        </th>
                        <td>
                            {{ App\Models\CompetitionParticipant::MAX_CHECKBOXES_SELECT[$competitionParticipant->max_checkboxes] ?? '' }}
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
                            {{ trans('cruds.competitionParticipant.fields.apparatus_wa') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionParticipant->apparatus_wa ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_rope') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionParticipant->apparatus_rope ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_hoop') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionParticipant->apparatus_hoop ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_ball') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionParticipant->apparatus_ball ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_clubs') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionParticipant->apparatus_clubs ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_ribbon') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionParticipant->apparatus_ribbon ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.add_musicfor_wa') }}
                        </th>
                        <td>
                            @if($competitionParticipant->add_musicfor_wa)
                                <a href="{{ $competitionParticipant->add_musicfor_wa->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.add_music_for_rope') }}
                        </th>
                        <td>
                            @if($competitionParticipant->add_music_for_rope)
                                <a href="{{ $competitionParticipant->add_music_for_rope->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.add_music_for_hoop') }}
                        </th>
                        <td>
                            @if($competitionParticipant->add_music_for_hoop)
                                <a href="{{ $competitionParticipant->add_music_for_hoop->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.add_music_for_ball') }}
                        </th>
                        <td>
                            @if($competitionParticipant->add_music_for_ball)
                                <a href="{{ $competitionParticipant->add_music_for_ball->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.add_music_for_clubs') }}
                        </th>
                        <td>
                            @if($competitionParticipant->add_music_for_clubs)
                                <a href="{{ $competitionParticipant->add_music_for_clubs->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.add_music_for_ribbon') }}
                        </th>
                        <td>
                            @if($competitionParticipant->add_music_for_ribbon)
                                <a href="{{ $competitionParticipant->add_music_for_ribbon->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_wa_logo') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->apparatus_wa_logo }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_rope_foto') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->apparatus_rope_foto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_hoop_foto') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->apparatus_hoop_foto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_ball_foto') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->apparatus_ball_foto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_clubs_foto') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->apparatus_clubs_foto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.apparatus_ribbon_foto') }}
                        </th>
                        <td>
                            {{ $competitionParticipant->apparatus_ribbon_foto }}
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
            <a class="nav-link" href="#competition_participiant_competition_card_firsts" role="tab" data-toggle="tab">
                {{ trans('cruds.competitionCardFirst.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#competition_participants_competition_groups" role="tab" data-toggle="tab">
                {{ trans('cruds.competitionGroup.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="competition_participiant_competition_card_firsts">
            @includeIf('admin.competitionParticipants.relationships.competitionParticipiantCompetitionCardFirsts', ['competitionCardFirsts' => $competitionParticipant->competitionParticipiantCompetitionCardFirsts])
        </div>
        <div class="tab-pane" role="tabpanel" id="competition_participants_competition_groups">
            @includeIf('admin.competitionParticipants.relationships.competitionParticipantsCompetitionGroups', ['competitionGroups' => $competitionParticipant->competitionParticipantsCompetitionGroups])
        </div>
    </div>
</div>

@endsection