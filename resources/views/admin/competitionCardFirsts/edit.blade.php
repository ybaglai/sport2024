@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.competitionCardFirst.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.competition-card-firsts.update", [$competitionCardFirst->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="competition_participiant_id">{{ trans('cruds.competitionCardFirst.fields.competition_participiant') }}</label>
                <select class="form-control select2 {{ $errors->has('competition_participiant') ? 'is-invalid' : '' }}" name="competition_participiant_id" id="competition_participiant_id">
                    @foreach($competition_participiants as $id => $entry)
                        <option value="{{ $id }}" {{ (old('competition_participiant_id') ? old('competition_participiant_id') : $competitionCardFirst->competition_participiant->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('competition_participiant'))
                    <div class="invalid-feedback">
                        {{ $errors->first('competition_participiant') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.competition_participiant_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="competition_group_id">{{ trans('cruds.competitionCardFirst.fields.competition_group') }}</label>
                <select class="form-control select2 {{ $errors->has('competition_group') ? 'is-invalid' : '' }}" name="competition_group_id" id="competition_group_id">
                    @foreach($competition_groups as $id => $entry)
                        <option value="{{ $id }}" {{ (old('competition_group_id') ? old('competition_group_id') : $competitionCardFirst->competition_group->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('competition_group'))
                    <div class="invalid-feedback">
                        {{ $errors->first('competition_group') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.competition_group_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="db_1">{{ trans('cruds.competitionCardFirst.fields.db_1') }}</label>
                <input class="form-control {{ $errors->has('db_1') ? 'is-invalid' : '' }}" type="number" name="db_1" id="db_1" value="{{ old('db_1', $competitionCardFirst->db_1) }}" step="0.001">
                @if($errors->has('db_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('db_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.db_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="db_2">{{ trans('cruds.competitionCardFirst.fields.db_2') }}</label>
                <input class="form-control {{ $errors->has('db_2') ? 'is-invalid' : '' }}" type="number" name="db_2" id="db_2" value="{{ old('db_2', $competitionCardFirst->db_2) }}" step="0.001">
                @if($errors->has('db_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('db_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.db_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="db_3">{{ trans('cruds.competitionCardFirst.fields.db_3') }}</label>
                <input class="form-control {{ $errors->has('db_3') ? 'is-invalid' : '' }}" type="number" name="db_3" id="db_3" value="{{ old('db_3', $competitionCardFirst->db_3) }}" step="0.001">
                @if($errors->has('db_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('db_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.db_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="db_4">{{ trans('cruds.competitionCardFirst.fields.db_4') }}</label>
                <input class="form-control {{ $errors->has('db_4') ? 'is-invalid' : '' }}" type="number" name="db_4" id="db_4" value="{{ old('db_4', $competitionCardFirst->db_4) }}" step="0.001">
                @if($errors->has('db_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('db_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.db_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="db">{{ trans('cruds.competitionCardFirst.fields.db') }}</label>
                <input class="form-control {{ $errors->has('db') ? 'is-invalid' : '' }}" type="number" name="db" id="db" value="{{ old('db', $competitionCardFirst->db) }}" step="0.001">
                @if($errors->has('db'))
                    <div class="invalid-feedback">
                        {{ $errors->first('db') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.db_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="da_1">{{ trans('cruds.competitionCardFirst.fields.da_1') }}</label>
                <input class="form-control {{ $errors->has('da_1') ? 'is-invalid' : '' }}" type="number" name="da_1" id="da_1" value="{{ old('da_1', $competitionCardFirst->da_1) }}" step="0.001">
                @if($errors->has('da_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('da_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.da_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="da_2">{{ trans('cruds.competitionCardFirst.fields.da_2') }}</label>
                <input class="form-control {{ $errors->has('da_2') ? 'is-invalid' : '' }}" type="number" name="da_2" id="da_2" value="{{ old('da_2', $competitionCardFirst->da_2) }}" step="0.001">
                @if($errors->has('da_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('da_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.da_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="da_3">{{ trans('cruds.competitionCardFirst.fields.da_3') }}</label>
                <input class="form-control {{ $errors->has('da_3') ? 'is-invalid' : '' }}" type="number" name="da_3" id="da_3" value="{{ old('da_3', $competitionCardFirst->da_3) }}" step="0.001">
                @if($errors->has('da_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('da_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.da_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="da_4">{{ trans('cruds.competitionCardFirst.fields.da_4') }}</label>
                <input class="form-control {{ $errors->has('da_4') ? 'is-invalid' : '' }}" type="number" name="da_4" id="da_4" value="{{ old('da_4', $competitionCardFirst->da_4) }}" step="0.001">
                @if($errors->has('da_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('da_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.da_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ded">{{ trans('cruds.competitionCardFirst.fields.ded') }}</label>
                <input class="form-control {{ $errors->has('ded') ? 'is-invalid' : '' }}" type="number" name="ded" id="ded" value="{{ old('ded', $competitionCardFirst->ded) }}" step="0.001">
                @if($errors->has('ded'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ded') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.ded_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="da">{{ trans('cruds.competitionCardFirst.fields.da') }}</label>
                <input class="form-control {{ $errors->has('da') ? 'is-invalid' : '' }}" type="number" name="da" id="da" value="{{ old('da', $competitionCardFirst->da) }}" step="0.001">
                @if($errors->has('da'))
                    <div class="invalid-feedback">
                        {{ $errors->first('da') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.da_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_1">{{ trans('cruds.competitionCardFirst.fields.a_1') }}</label>
                <input class="form-control {{ $errors->has('a_1') ? 'is-invalid' : '' }}" type="number" name="a_1" id="a_1" value="{{ old('a_1', $competitionCardFirst->a_1) }}" step="0.001">
                @if($errors->has('a_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('a_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.a_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_2">{{ trans('cruds.competitionCardFirst.fields.a_2') }}</label>
                <input class="form-control {{ $errors->has('a_2') ? 'is-invalid' : '' }}" type="number" name="a_2" id="a_2" value="{{ old('a_2', $competitionCardFirst->a_2) }}" step="0.001">
                @if($errors->has('a_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('a_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.a_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_4">{{ trans('cruds.competitionCardFirst.fields.a_4') }}</label>
                <input class="form-control {{ $errors->has('a_4') ? 'is-invalid' : '' }}" type="number" name="a_4" id="a_4" value="{{ old('a_4', $competitionCardFirst->a_4) }}" step="0.001">
                @if($errors->has('a_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('a_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.a_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_3">{{ trans('cruds.competitionCardFirst.fields.a_3') }}</label>
                <input class="form-control {{ $errors->has('a_3') ? 'is-invalid' : '' }}" type="number" name="a_3" id="a_3" value="{{ old('a_3', $competitionCardFirst->a_3) }}" step="0.001">
                @if($errors->has('a_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('a_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.a_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a">{{ trans('cruds.competitionCardFirst.fields.a') }}</label>
                <input class="form-control {{ $errors->has('a') ? 'is-invalid' : '' }}" type="number" name="a" id="a" value="{{ old('a', $competitionCardFirst->a) }}" step="0.001">
                @if($errors->has('a'))
                    <div class="invalid-feedback">
                        {{ $errors->first('a') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.a_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_1">{{ trans('cruds.competitionCardFirst.fields.e_1') }}</label>
                <input class="form-control {{ $errors->has('e_1') ? 'is-invalid' : '' }}" type="number" name="e_1" id="e_1" value="{{ old('e_1', $competitionCardFirst->e_1) }}" step="0.001">
                @if($errors->has('e_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('e_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.e_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_2">{{ trans('cruds.competitionCardFirst.fields.e_2') }}</label>
                <input class="form-control {{ $errors->has('e_2') ? 'is-invalid' : '' }}" type="number" name="e_2" id="e_2" value="{{ old('e_2', $competitionCardFirst->e_2) }}" step="0.001">
                @if($errors->has('e_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('e_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.e_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_3">{{ trans('cruds.competitionCardFirst.fields.e_3') }}</label>
                <input class="form-control {{ $errors->has('e_3') ? 'is-invalid' : '' }}" type="number" name="e_3" id="e_3" value="{{ old('e_3', $competitionCardFirst->e_3) }}" step="0.001">
                @if($errors->has('e_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('e_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.e_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_4">{{ trans('cruds.competitionCardFirst.fields.e_4') }}</label>
                <input class="form-control {{ $errors->has('e_4') ? 'is-invalid' : '' }}" type="number" name="e_4" id="e_4" value="{{ old('e_4', $competitionCardFirst->e_4) }}" step="0.001">
                @if($errors->has('e_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('e_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.e_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e">{{ trans('cruds.competitionCardFirst.fields.e') }}</label>
                <input class="form-control {{ $errors->has('e') ? 'is-invalid' : '' }}" type="number" name="e" id="e" value="{{ old('e', $competitionCardFirst->e) }}" step="0.001">
                @if($errors->has('e'))
                    <div class="invalid-feedback">
                        {{ $errors->first('e') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.e_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="db_plus_da">{{ trans('cruds.competitionCardFirst.fields.db_plus_da') }}</label>
                <input class="form-control {{ $errors->has('db_plus_da') ? 'is-invalid' : '' }}" type="number" name="db_plus_da" id="db_plus_da" value="{{ old('db_plus_da', $competitionCardFirst->db_plus_da) }}" step="0.001">
                @if($errors->has('db_plus_da'))
                    <div class="invalid-feedback">
                        {{ $errors->first('db_plus_da') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.db_plus_da_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="a_panel">{{ trans('cruds.competitionCardFirst.fields.a_panel') }}</label>
                <input class="form-control {{ $errors->has('a_panel') ? 'is-invalid' : '' }}" type="number" name="a_panel" id="a_panel" value="{{ old('a_panel', $competitionCardFirst->a_panel) }}" step="0.001">
                @if($errors->has('a_panel'))
                    <div class="invalid-feedback">
                        {{ $errors->first('a_panel') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.a_panel_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="e_panel">{{ trans('cruds.competitionCardFirst.fields.e_panel') }}</label>
                <input class="form-control {{ $errors->has('e_panel') ? 'is-invalid' : '' }}" type="number" name="e_panel" id="e_panel" value="{{ old('e_panel', $competitionCardFirst->e_panel) }}" step="0.001">
                @if($errors->has('e_panel'))
                    <div class="invalid-feedback">
                        {{ $errors->first('e_panel') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.e_panel_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="overall_score">{{ trans('cruds.competitionCardFirst.fields.overall_score') }}</label>
                <input class="form-control {{ $errors->has('overall_score') ? 'is-invalid' : '' }}" type="number" name="overall_score" id="overall_score" value="{{ old('overall_score', $competitionCardFirst->overall_score) }}" step="0.001">
                @if($errors->has('overall_score'))
                    <div class="invalid-feedback">
                        {{ $errors->first('overall_score') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.overall_score_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="place">{{ trans('cruds.competitionCardFirst.fields.place') }}</label>
                <input class="form-control {{ $errors->has('place') ? 'is-invalid' : '' }}" type="number" name="place" id="place" value="{{ old('place', $competitionCardFirst->place) }}" step="1">
                @if($errors->has('place'))
                    <div class="invalid-feedback">
                        {{ $errors->first('place') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.place_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('status') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="status" value="0">
                    <input class="form-check-input" type="checkbox" name="status" id="status" value="1" {{ $competitionCardFirst->status || old('status', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">{{ trans('cruds.competitionCardFirst.fields.status') }}</label>
                </div>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('evaluated') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="evaluated" value="0">
                    <input class="form-check-input" type="checkbox" name="evaluated" id="evaluated" value="1" {{ $competitionCardFirst->evaluated || old('evaluated', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="evaluated">{{ trans('cruds.competitionCardFirst.fields.evaluated') }}</label>
                </div>
                @if($errors->has('evaluated'))
                    <div class="invalid-feedback">
                        {{ $errors->first('evaluated') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.evaluated_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code">{{ trans('cruds.competitionCardFirst.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $competitionCardFirst->code) }}">
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date">{{ trans('cruds.competitionCardFirst.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date', $competitionCardFirst->date) }}">
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="time">{{ trans('cruds.competitionCardFirst.fields.time') }}</label>
                <input class="form-control timepicker {{ $errors->has('time') ? 'is-invalid' : '' }}" type="text" name="time" id="time" value="{{ old('time', $competitionCardFirst->time) }}">
                @if($errors->has('time'))
                    <div class="invalid-feedback">
                        {{ $errors->first('time') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionCardFirst.fields.time_helper') }}</span>
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