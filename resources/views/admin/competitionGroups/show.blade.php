@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.competitionGroup.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.competition-groups.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.id') }}
                        </th>
                        <td>
                            {{ $competitionGroup->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.name') }}
                        </th>
                        <td>
                            {{ $competitionGroup->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.coach') }}
                        </th>
                        <td>
                            {{ $competitionGroup->coach }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.description') }}
                        </th>
                        <td>
                            {{ $competitionGroup->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.category') }}
                        </th>
                        <td>
                            {{ $competitionGroup->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.competition_participants') }}
                        </th>
                        <td>
                            @foreach($competitionGroup->competition_participants as $key => $competition_participants)
                                <span class="label label-info">{{ $competition_participants->fullname }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.apparatus_wa') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionGroup->apparatus_wa ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.apparatus_hoop') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionGroup->apparatus_hoop ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.apparatus_rope') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionGroup->apparatus_rope ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.apparatus_ball') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionGroup->apparatus_ball ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.apparatus_clubs') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionGroup->apparatus_clubs ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.apparatus_ribbon') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionGroup->apparatus_ribbon ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.max_checkboxes') }}
                        </th>
                        <td>
                            {{ $competitionGroup->max_checkboxes }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.status') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionGroup->status ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.music_group') }}
                        </th>
                        <td>
                            @if($competitionGroup->music_group)
                                <a href="{{ $competitionGroup->music_group->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.competition-groups.index') }}">
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
            <a class="nav-link" href="#competition_group_competition_card_firsts" role="tab" data-toggle="tab">
                {{ trans('cruds.competitionCardFirst.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="competition_group_competition_card_firsts">
            @includeIf('admin.competitionGroups.relationships.competitionGroupCompetitionCardFirsts', ['competitionCardFirsts' => $competitionGroup->competitionGroupCompetitionCardFirsts])
        </div>
    </div>
</div>

@endsection