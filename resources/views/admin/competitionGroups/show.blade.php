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
                            {{ trans('cruds.competitionGroup.fields.competition_participants') }}
                        </th>
                        <td>
                            @foreach($competitionGroup->competition_participants as $key => $competition_participants)
                                <span class="label label-info">{{ $competition_participants->fullname }}</span>
                            @endforeach
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



@endsection