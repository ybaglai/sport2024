@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.ivent.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ivents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.id') }}
                        </th>
                        <td>
                            {{ $ivent->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.private') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ivent->private ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.virtual') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ivent->virtual ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.date') }}
                        </th>
                        <td>
                            {{ $ivent->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.date_to') }}
                        </th>
                        <td>
                            {{ $ivent->date_to }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.event_name') }}
                        </th>
                        <td>
                            {{ $ivent->event_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.place') }}
                        </th>
                        <td>
                            {{ $ivent->place }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.country') }}
                        </th>
                        <td>
                            {{ $ivent->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.deadline') }}
                        </th>
                        <td>
                            {{ $ivent->deadline }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.deadline_d_form_and_mp_3') }}
                        </th>
                        <td>
                            {{ $ivent->deadline_d_form_and_mp_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.organizer') }}
                        </th>
                        <td>
                            {{ $ivent->organizer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.contact') }}
                        </th>
                        <td>
                            {!! $ivent->contact !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.notes') }}
                        </th>
                        <td>
                            {!! $ivent->notes !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.allow_volunteers_registration') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ivent->allow_volunteers_registration ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.volunteers_from') }}
                        </th>
                        <td>
                            {{ $ivent->volunteers_from }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.volunteers_to') }}
                        </th>
                        <td>
                            {{ $ivent->volunteers_to }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.allow_meal_form') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ivent->allow_meal_form ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.meal_from') }}
                        </th>
                        <td>
                            {{ $ivent->meal_from }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.meal_to') }}
                        </th>
                        <td>
                            {{ $ivent->meal_to }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.media_registration') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ivent->media_registration ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.travel_form') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ivent->travel_form ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.docs') }}
                        </th>
                        <td>
                            @foreach($ivent->docs as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.hotel_form') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ivent->hotel_form ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.ivent.fields.visa_form') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $ivent->visa_form ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.ivents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection