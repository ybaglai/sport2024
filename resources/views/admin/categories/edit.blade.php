@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.categories.update", [$category->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.category.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $category->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type">
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', $category->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="year_of_birth">{{ trans('cruds.category.fields.year_of_birth') }}</label>
                <input class="form-control {{ $errors->has('year_of_birth') ? 'is-invalid' : '' }}" type="text" name="year_of_birth" id="year_of_birth" value="{{ old('year_of_birth', $category->year_of_birth) }}">
                @if($errors->has('year_of_birth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('year_of_birth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.year_of_birth_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.category.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $category->description) }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.app_1') }}</label>
                <select class="form-control {{ $errors->has('app_1') ? 'is-invalid' : '' }}" name="app_1" id="app_1">
                    <option value disabled {{ old('app_1', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::APP_1_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('app_1', $category->app_1) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('app_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('app_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.app_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.app_2') }}</label>
                <select class="form-control {{ $errors->has('app_2') ? 'is-invalid' : '' }}" name="app_2" id="app_2">
                    <option value disabled {{ old('app_2', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::APP_2_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('app_2', $category->app_2) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('app_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('app_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.app_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.app_3') }}</label>
                <select class="form-control {{ $errors->has('app_3') ? 'is-invalid' : '' }}" name="app_3" id="app_3">
                    <option value disabled {{ old('app_3', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::APP_3_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('app_3', $category->app_3) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('app_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('app_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.app_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.app_4') }}</label>
                <select class="form-control {{ $errors->has('app_4') ? 'is-invalid' : '' }}" name="app_4" id="app_4">
                    <option value disabled {{ old('app_4', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::APP_4_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('app_4', $category->app_4) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('app_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('app_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.app_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.app_5') }}</label>
                <select class="form-control {{ $errors->has('app_5') ? 'is-invalid' : '' }}" name="app_5" id="app_5">
                    <option value disabled {{ old('app_5', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::APP_5_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('app_5', $category->app_5) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('app_5'))
                    <div class="invalid-feedback">
                        {{ $errors->first('app_5') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.app_5_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.app_6') }}</label>
                <select class="form-control {{ $errors->has('app_6') ? 'is-invalid' : '' }}" name="app_6" id="app_6">
                    <option value disabled {{ old('app_6', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::APP_6_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('app_6', $category->app_6) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('app_6'))
                    <div class="invalid-feedback">
                        {{ $errors->first('app_6') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.app_6_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.app_in_final') }}</label>
                <select class="form-control {{ $errors->has('app_in_final') ? 'is-invalid' : '' }}" name="app_in_final" id="app_in_final">
                    <option value disabled {{ old('app_in_final', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::APP_IN_FINAL_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('app_in_final', $category->app_in_final) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('app_in_final'))
                    <div class="invalid-feedback">
                        {{ $errors->first('app_in_final') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.app_in_final_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.number_of_competitions') }}</label>
                <select class="form-control {{ $errors->has('number_of_competitions') ? 'is-invalid' : '' }}" name="number_of_competitions" id="number_of_competitions">
                    <option value disabled {{ old('number_of_competitions', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Category::NUMBER_OF_COMPETITIONS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('number_of_competitions', $category->number_of_competitions) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('number_of_competitions'))
                    <div class="invalid-feedback">
                        {{ $errors->first('number_of_competitions') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.number_of_competitions_helper') }}</span>
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