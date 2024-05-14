@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.competitionParticipant.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.competition-participants.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.competitionParticipant.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type" required>
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\CompetitionParticipant::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fig_licence_nr">{{ trans('cruds.competitionParticipant.fields.fig_licence_nr') }}</label>
                <input class="form-control {{ $errors->has('fig_licence_nr') ? 'is-invalid' : '' }}" type="text" name="fig_licence_nr" id="fig_licence_nr" value="{{ old('fig_licence_nr', '') }}">
                @if($errors->has('fig_licence_nr'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fig_licence_nr') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.fig_licence_nr_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="national_lic">{{ trans('cruds.competitionParticipant.fields.national_lic') }}</label>
                <input class="form-control {{ $errors->has('national_lic') ? 'is-invalid' : '' }}" type="text" name="national_lic" id="national_lic" value="{{ old('national_lic', '') }}">
                @if($errors->has('national_lic'))
                    <div class="invalid-feedback">
                        {{ $errors->first('national_lic') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.national_lic_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="surname">{{ trans('cruds.competitionParticipant.fields.surname') }}</label>
                <input class="form-control {{ $errors->has('surname') ? 'is-invalid' : '' }}" type="text" name="surname" id="surname" value="{{ old('surname', '') }}" required>
                @if($errors->has('surname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('surname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.surname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.competitionParticipant.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fullname">{{ trans('cruds.competitionParticipant.fields.fullname') }}</label>
                <input class="form-control {{ $errors->has('fullname') ? 'is-invalid' : '' }}" type="text" name="fullname" id="fullname" value="{{ old('fullname', '') }}">
                @if($errors->has('fullname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fullname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.fullname_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_of_birth">{{ trans('cruds.competitionParticipant.fields.year_of_birth') }}</label>
                <input class="form-control {{ $errors->has('year_of_birth') ? 'is-invalid' : '' }}" type="text" name="year_of_birth" id="year_of_birth" value="{{ old('year_of_birth', '') }}">
                @if($errors->has('year_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.year_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="coaches">{{ trans('cruds.competitionParticipant.fields.coaches') }}</label>
                <input class="form-control {{ $errors->has('coaches') ? 'is-invalid' : '' }}" type="text" name="coaches" id="coaches" value="{{ old('coaches', '') }}">
                @if($errors->has('coaches'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coaches') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.coaches_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.competitionParticipant.fields.age_group') }}</label>
                <select class="form-control {{ $errors->has('age_group') ? 'is-invalid' : '' }}" name="age_group" id="age_group">
                    <option value disabled {{ old('age_group', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\CompetitionParticipant::AGE_GROUP_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('age_group', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('age_group'))
                    <div class="invalid-feedback">
                        {{ $errors->first('age_group') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.age_group_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organization">{{ trans('cruds.competitionParticipant.fields.organization') }}</label>
                <input class="form-control {{ $errors->has('organization') ? 'is-invalid' : '' }}" type="text" name="organization" id="organization" value="{{ old('organization', '') }}">
                @if($errors->has('organization'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organization') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.organization_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.competitionParticipant.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', '') }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city">{{ trans('cruds.competitionParticipant.fields.city') }}</label>
                <input class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" type="text" name="city" id="city" value="{{ old('city', '') }}">
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.competitionParticipant.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_address">{{ trans('cruds.competitionParticipant.fields.contact_address') }}</label>
                <input class="form-control {{ $errors->has('contact_address') ? 'is-invalid' : '' }}" type="text" name="contact_address" id="contact_address" value="{{ old('contact_address', '') }}">
                @if($errors->has('contact_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.contact_address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="category_id">{{ trans('cruds.competitionParticipant.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
                    @foreach($categories as $id => $entry)
                        <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="foto">{{ trans('cruds.competitionParticipant.fields.foto') }}</label>
                <div class="needsclick dropzone {{ $errors->has('foto') ? 'is-invalid' : '' }}" id="foto-dropzone">
                </div>
                @if($errors->has('foto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('foto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.foto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="link_to_the_archive">{{ trans('cruds.competitionParticipant.fields.link_to_the_archive') }}</label>
                <input class="form-control {{ $errors->has('link_to_the_archive') ? 'is-invalid' : '' }}" type="text" name="link_to_the_archive" id="link_to_the_archive" value="{{ old('link_to_the_archive', '') }}">
                @if($errors->has('link_to_the_archive'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link_to_the_archive') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.link_to_the_archive_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.competitionParticipant.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.competitionParticipant.fields.max_checkboxes') }}</label>
                <select class="form-control {{ $errors->has('max_checkboxes') ? 'is-invalid' : '' }}" name="max_checkboxes" id="max_checkboxes">
                    <option value disabled {{ old('max_checkboxes', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\CompetitionParticipant::MAX_CHECKBOXES_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('max_checkboxes', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('max_checkboxes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('max_checkboxes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.max_checkboxes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('status') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="status" value="0">
                    <input class="form-check-input" type="checkbox" name="status" id="status" value="1" {{ old('status', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">{{ trans('cruds.competitionParticipant.fields.status') }}</label>
                </div>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_wa') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_wa" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_wa" id="apparatus_wa" value="1" {{ old('apparatus_wa', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_wa">{{ trans('cruds.competitionParticipant.fields.apparatus_wa') }}</label>
                </div>
                @if($errors->has('apparatus_wa'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_wa') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_wa_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_rope') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_rope" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_rope" id="apparatus_rope" value="1" {{ old('apparatus_rope', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_rope">{{ trans('cruds.competitionParticipant.fields.apparatus_rope') }}</label>
                </div>
                @if($errors->has('apparatus_rope'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_rope') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_rope_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_hoop') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_hoop" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_hoop" id="apparatus_hoop" value="1" {{ old('apparatus_hoop', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_hoop">{{ trans('cruds.competitionParticipant.fields.apparatus_hoop') }}</label>
                </div>
                @if($errors->has('apparatus_hoop'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_hoop') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_hoop_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_ball') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_ball" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_ball" id="apparatus_ball" value="1" {{ old('apparatus_ball', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_ball">{{ trans('cruds.competitionParticipant.fields.apparatus_ball') }}</label>
                </div>
                @if($errors->has('apparatus_ball'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_ball') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_ball_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_clubs') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_clubs" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_clubs" id="apparatus_clubs" value="1" {{ old('apparatus_clubs', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_clubs">{{ trans('cruds.competitionParticipant.fields.apparatus_clubs') }}</label>
                </div>
                @if($errors->has('apparatus_clubs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_clubs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_clubs_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_ribbon') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_ribbon" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_ribbon" id="apparatus_ribbon" value="1" {{ old('apparatus_ribbon', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_ribbon">{{ trans('cruds.competitionParticipant.fields.apparatus_ribbon') }}</label>
                </div>
                @if($errors->has('apparatus_ribbon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_ribbon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_ribbon_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="add_musicfor_wa">{{ trans('cruds.competitionParticipant.fields.add_musicfor_wa') }}</label>
                <div class="needsclick dropzone {{ $errors->has('add_musicfor_wa') ? 'is-invalid' : '' }}" id="add_musicfor_wa-dropzone">
                </div>
                @if($errors->has('add_musicfor_wa'))
                    <div class="invalid-feedback">
                        {{ $errors->first('add_musicfor_wa') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.add_musicfor_wa_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="add_music_for_rope">{{ trans('cruds.competitionParticipant.fields.add_music_for_rope') }}</label>
                <div class="needsclick dropzone {{ $errors->has('add_music_for_rope') ? 'is-invalid' : '' }}" id="add_music_for_rope-dropzone">
                </div>
                @if($errors->has('add_music_for_rope'))
                    <div class="invalid-feedback">
                        {{ $errors->first('add_music_for_rope') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.add_music_for_rope_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="add_music_for_hoop">{{ trans('cruds.competitionParticipant.fields.add_music_for_hoop') }}</label>
                <div class="needsclick dropzone {{ $errors->has('add_music_for_hoop') ? 'is-invalid' : '' }}" id="add_music_for_hoop-dropzone">
                </div>
                @if($errors->has('add_music_for_hoop'))
                    <div class="invalid-feedback">
                        {{ $errors->first('add_music_for_hoop') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.add_music_for_hoop_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="add_music_for_ball">{{ trans('cruds.competitionParticipant.fields.add_music_for_ball') }}</label>
                <div class="needsclick dropzone {{ $errors->has('add_music_for_ball') ? 'is-invalid' : '' }}" id="add_music_for_ball-dropzone">
                </div>
                @if($errors->has('add_music_for_ball'))
                    <div class="invalid-feedback">
                        {{ $errors->first('add_music_for_ball') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.add_music_for_ball_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="add_music_for_clubs">{{ trans('cruds.competitionParticipant.fields.add_music_for_clubs') }}</label>
                <div class="needsclick dropzone {{ $errors->has('add_music_for_clubs') ? 'is-invalid' : '' }}" id="add_music_for_clubs-dropzone">
                </div>
                @if($errors->has('add_music_for_clubs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('add_music_for_clubs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.add_music_for_clubs_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="add_music_for_ribbon">{{ trans('cruds.competitionParticipant.fields.add_music_for_ribbon') }}</label>
                <div class="needsclick dropzone {{ $errors->has('add_music_for_ribbon') ? 'is-invalid' : '' }}" id="add_music_for_ribbon-dropzone">
                </div>
                @if($errors->has('add_music_for_ribbon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('add_music_for_ribbon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.add_music_for_ribbon_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="apparatus_wa_logo">{{ trans('cruds.competitionParticipant.fields.apparatus_wa_logo') }}</label>
                <input class="form-control {{ $errors->has('apparatus_wa_logo') ? 'is-invalid' : '' }}" type="text" name="apparatus_wa_logo" id="apparatus_wa_logo" value="{{ old('apparatus_wa_logo', '') }}">
                @if($errors->has('apparatus_wa_logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_wa_logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_wa_logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="apparatus_rope_foto">{{ trans('cruds.competitionParticipant.fields.apparatus_rope_foto') }}</label>
                <input class="form-control {{ $errors->has('apparatus_rope_foto') ? 'is-invalid' : '' }}" type="text" name="apparatus_rope_foto" id="apparatus_rope_foto" value="{{ old('apparatus_rope_foto', '') }}">
                @if($errors->has('apparatus_rope_foto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_rope_foto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_rope_foto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="apparatus_hoop_foto">{{ trans('cruds.competitionParticipant.fields.apparatus_hoop_foto') }}</label>
                <input class="form-control {{ $errors->has('apparatus_hoop_foto') ? 'is-invalid' : '' }}" type="text" name="apparatus_hoop_foto" id="apparatus_hoop_foto" value="{{ old('apparatus_hoop_foto', '') }}">
                @if($errors->has('apparatus_hoop_foto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_hoop_foto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_hoop_foto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="apparatus_ball_foto">{{ trans('cruds.competitionParticipant.fields.apparatus_ball_foto') }}</label>
                <input class="form-control {{ $errors->has('apparatus_ball_foto') ? 'is-invalid' : '' }}" type="text" name="apparatus_ball_foto" id="apparatus_ball_foto" value="{{ old('apparatus_ball_foto', '') }}">
                @if($errors->has('apparatus_ball_foto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_ball_foto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_ball_foto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="apparatus_clubs_foto">{{ trans('cruds.competitionParticipant.fields.apparatus_clubs_foto') }}</label>
                <input class="form-control {{ $errors->has('apparatus_clubs_foto') ? 'is-invalid' : '' }}" type="text" name="apparatus_clubs_foto" id="apparatus_clubs_foto" value="{{ old('apparatus_clubs_foto', '') }}">
                @if($errors->has('apparatus_clubs_foto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_clubs_foto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_clubs_foto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="apparatus_ribbon_foto">{{ trans('cruds.competitionParticipant.fields.apparatus_ribbon_foto') }}</label>
                <input class="form-control {{ $errors->has('apparatus_ribbon_foto') ? 'is-invalid' : '' }}" type="text" name="apparatus_ribbon_foto" id="apparatus_ribbon_foto" value="{{ old('apparatus_ribbon_foto', '') }}">
                @if($errors->has('apparatus_ribbon_foto'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_ribbon_foto') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.apparatus_ribbon_foto_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="code">{{ trans('cruds.competitionParticipant.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}">
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionParticipant.fields.code_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.fotoDropzone = {
    url: '{{ route('admin.competition-participants.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="foto"]').remove()
      $('form').append('<input type="hidden" name="foto" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="foto"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($competitionParticipant) && $competitionParticipant->foto)
      var file = {!! json_encode($competitionParticipant->foto) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="foto" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    Dropzone.options.addMusicforWaDropzone = {
    url: '{{ route('admin.competition-participants.storeMedia') }}',
    maxFilesize: 5, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').find('input[name="add_musicfor_wa"]').remove()
      $('form').append('<input type="hidden" name="add_musicfor_wa" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="add_musicfor_wa"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($competitionParticipant) && $competitionParticipant->add_musicfor_wa)
      var file = {!! json_encode($competitionParticipant->add_musicfor_wa) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="add_musicfor_wa" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.addMusicForRopeDropzone = {
    url: '{{ route('admin.competition-participants.storeMedia') }}',
    maxFilesize: 5, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').find('input[name="add_music_for_rope"]').remove()
      $('form').append('<input type="hidden" name="add_music_for_rope" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="add_music_for_rope"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($competitionParticipant) && $competitionParticipant->add_music_for_rope)
      var file = {!! json_encode($competitionParticipant->add_music_for_rope) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="add_music_for_rope" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.addMusicForHoopDropzone = {
    url: '{{ route('admin.competition-participants.storeMedia') }}',
    maxFilesize: 5, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').find('input[name="add_music_for_hoop"]').remove()
      $('form').append('<input type="hidden" name="add_music_for_hoop" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="add_music_for_hoop"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($competitionParticipant) && $competitionParticipant->add_music_for_hoop)
      var file = {!! json_encode($competitionParticipant->add_music_for_hoop) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="add_music_for_hoop" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.addMusicForBallDropzone = {
    url: '{{ route('admin.competition-participants.storeMedia') }}',
    maxFilesize: 5, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').find('input[name="add_music_for_ball"]').remove()
      $('form').append('<input type="hidden" name="add_music_for_ball" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="add_music_for_ball"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($competitionParticipant) && $competitionParticipant->add_music_for_ball)
      var file = {!! json_encode($competitionParticipant->add_music_for_ball) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="add_music_for_ball" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.addMusicForClubsDropzone = {
    url: '{{ route('admin.competition-participants.storeMedia') }}',
    maxFilesize: 5, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').find('input[name="add_music_for_clubs"]').remove()
      $('form').append('<input type="hidden" name="add_music_for_clubs" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="add_music_for_clubs"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($competitionParticipant) && $competitionParticipant->add_music_for_clubs)
      var file = {!! json_encode($competitionParticipant->add_music_for_clubs) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="add_music_for_clubs" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.addMusicForRibbonDropzone = {
    url: '{{ route('admin.competition-participants.storeMedia') }}',
    maxFilesize: 5, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 5
    },
    success: function (file, response) {
      $('form').find('input[name="add_music_for_ribbon"]').remove()
      $('form').append('<input type="hidden" name="add_music_for_ribbon" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="add_music_for_ribbon"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($competitionParticipant) && $competitionParticipant->add_music_for_ribbon)
      var file = {!! json_encode($competitionParticipant->add_music_for_ribbon) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="add_music_for_ribbon" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection