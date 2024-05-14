@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.competitionCardFirst.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.competition-card-firsts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.id') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.competition_participiant') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->competition_participiant->fullname ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.competition_group') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->competition_group->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_1') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->db_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_2') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->db_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_3') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->db_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_4') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->db_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->db }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da_1') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->da_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da_2') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->da_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da_3') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->da_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da_4') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->da_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.ded') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->ded }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->da }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_1') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->a_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_2') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->a_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_4') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->a_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_3') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->a_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->a }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_1') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->e_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_2') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->e_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_3') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->e_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_4') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->e_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->e }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_plus_da') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->db_plus_da }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_panel') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->a_panel }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_panel') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->e_panel }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.overall_score') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->overall_score }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.place') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->place }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.status') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionCardFirst->status ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.evaluated') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $competitionCardFirst->evaluated ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.code') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.date') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.time') }}
                        </th>
                        <td>
                            {{ $competitionCardFirst->time }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.competition-card-firsts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection