@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.competitionGroup.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.competition-groups.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.competitionGroup.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="coach">{{ trans('cruds.competitionGroup.fields.coach') }}</label>
                <input class="form-control {{ $errors->has('coach') ? 'is-invalid' : '' }}" type="text" name="coach" id="coach" value="{{ old('coach', '') }}" required>
                @if($errors->has('coach'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coach') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.coach_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="competition_participants">{{ trans('cruds.competitionGroup.fields.competition_participants') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('competition_participants') ? 'is-invalid' : '' }}" name="competition_participants[]" id="competition_participants" multiple>
                    @foreach($competition_participants as $id => $competition_participant)
                        <option value="{{ $id }}" {{ in_array($id, old('competition_participants', [])) ? 'selected' : '' }}>{{ $competition_participant }}</option>
                    @endforeach
                </select>
                @if($errors->has('competition_participants'))
                    <div class="invalid-feedback">
                        {{ $errors->first('competition_participants') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.competition_participants_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection