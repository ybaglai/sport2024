@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.category.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.id') }}
                        </th>
                        <td>
                            {{ $category->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.name') }}
                        </th>
                        <td>
                            {{ $category->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.type') }}
                        </th>
                        <td>
                            {{ App\Models\Category::TYPE_SELECT[$category->type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.year_of_birth') }}
                        </th>
                        <td>
                            {{ $category->year_of_birth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.description') }}
                        </th>
                        <td>
                            {{ $category->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.app_1') }}
                        </th>
                        <td>
                            {{ App\Models\Category::APP_1_SELECT[$category->app_1] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.app_2') }}
                        </th>
                        <td>
                            {{ App\Models\Category::APP_2_SELECT[$category->app_2] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.app_3') }}
                        </th>
                        <td>
                            {{ App\Models\Category::APP_3_SELECT[$category->app_3] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.app_4') }}
                        </th>
                        <td>
                            {{ App\Models\Category::APP_4_SELECT[$category->app_4] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.app_5') }}
                        </th>
                        <td>
                            {{ App\Models\Category::APP_5_SELECT[$category->app_5] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.app_6') }}
                        </th>
                        <td>
                            {{ App\Models\Category::APP_6_SELECT[$category->app_6] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.app_in_final') }}
                        </th>
                        <td>
                            {{ App\Models\Category::APP_IN_FINAL_SELECT[$category->app_in_final] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.number_of_competitions') }}
                        </th>
                        <td>
                            {{ App\Models\Category::NUMBER_OF_COMPETITIONS_SELECT[$category->number_of_competitions] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.categories.index') }}">
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
            <a class="nav-link" href="#category_competition_participants" role="tab" data-toggle="tab">
                {{ trans('cruds.competitionParticipant.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#category_competition_groups" role="tab" data-toggle="tab">
                {{ trans('cruds.competitionGroup.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="category_competition_participants">
            @includeIf('admin.categories.relationships.categoryCompetitionParticipants', ['competitionParticipants' => $category->categoryCompetitionParticipants])
        </div>
        <div class="tab-pane" role="tabpanel" id="category_competition_groups">
            @includeIf('admin.categories.relationships.categoryCompetitionGroups', ['competitionGroups' => $category->categoryCompetitionGroups])
        </div>
    </div>
</div>

@endsection