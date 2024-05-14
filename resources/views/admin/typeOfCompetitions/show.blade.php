@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.typeOfCompetition.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.type-of-competitions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.id') }}
                        </th>
                        <td>
                            {{ $typeOfCompetition->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.name') }}
                        </th>
                        <td>
                            {{ $typeOfCompetition->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.icon') }}
                        </th>
                        <td>
                            @if($typeOfCompetition->icon)
                                <a href="{{ $typeOfCompetition->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $typeOfCompetition->icon->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.description') }}
                        </th>
                        <td>
                            {{ $typeOfCompetition->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.icon_2') }}
                        </th>
                        <td>
                            {{ $typeOfCompetition->icon_2 }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.type-of-competitions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection