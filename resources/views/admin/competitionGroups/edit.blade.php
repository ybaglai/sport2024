@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.competitionGroup.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.competition-groups.update", [$competitionGroup->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.competitionGroup.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $competitionGroup->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="coach">{{ trans('cruds.competitionGroup.fields.coach') }}</label>
                <input class="form-control {{ $errors->has('coach') ? 'is-invalid' : '' }}" type="text" name="coach" id="coach" value="{{ old('coach', $competitionGroup->coach) }}" required>
                @if($errors->has('coach'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coach') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.coach_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.competitionGroup.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $competitionGroup->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="category_id">{{ trans('cruds.competitionGroup.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                    @foreach($categories as $id => $entry)
                        <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $competitionGroup->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="competition_participants">{{ trans('cruds.competitionGroup.fields.competition_participants') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('competition_participants') ? 'is-invalid' : '' }}" name="competition_participants[]" id="competition_participants" multiple>
                    @foreach($competition_participants as $id => $competition_participant)
                        <option value="{{ $id }}" {{ (in_array($id, old('competition_participants', [])) || $competitionGroup->competition_participants->contains($id)) ? 'selected' : '' }}>{{ $competition_participant }}</option>
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
                <div class="form-check {{ $errors->has('apparatus_wa') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_wa" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_wa" id="apparatus_wa" value="1" {{ $competitionGroup->apparatus_wa || old('apparatus_wa', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_wa">{{ trans('cruds.competitionGroup.fields.apparatus_wa') }}</label>
                </div>
                @if($errors->has('apparatus_wa'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_wa') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.apparatus_wa_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_hoop') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_hoop" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_hoop" id="apparatus_hoop" value="1" {{ $competitionGroup->apparatus_hoop || old('apparatus_hoop', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_hoop">{{ trans('cruds.competitionGroup.fields.apparatus_hoop') }}</label>
                </div>
                @if($errors->has('apparatus_hoop'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_hoop') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.apparatus_hoop_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_rope') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_rope" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_rope" id="apparatus_rope" value="1" {{ $competitionGroup->apparatus_rope || old('apparatus_rope', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_rope">{{ trans('cruds.competitionGroup.fields.apparatus_rope') }}</label>
                </div>
                @if($errors->has('apparatus_rope'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_rope') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.apparatus_rope_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_ball') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_ball" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_ball" id="apparatus_ball" value="1" {{ $competitionGroup->apparatus_ball || old('apparatus_ball', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_ball">{{ trans('cruds.competitionGroup.fields.apparatus_ball') }}</label>
                </div>
                @if($errors->has('apparatus_ball'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_ball') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.apparatus_ball_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_clubs') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_clubs" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_clubs" id="apparatus_clubs" value="1" {{ $competitionGroup->apparatus_clubs || old('apparatus_clubs', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_clubs">{{ trans('cruds.competitionGroup.fields.apparatus_clubs') }}</label>
                </div>
                @if($errors->has('apparatus_clubs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_clubs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.apparatus_clubs_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('apparatus_ribbon') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="apparatus_ribbon" value="0">
                    <input class="form-check-input" type="checkbox" name="apparatus_ribbon" id="apparatus_ribbon" value="1" {{ $competitionGroup->apparatus_ribbon || old('apparatus_ribbon', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="apparatus_ribbon">{{ trans('cruds.competitionGroup.fields.apparatus_ribbon') }}</label>
                </div>
                @if($errors->has('apparatus_ribbon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('apparatus_ribbon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.apparatus_ribbon_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="max_checkboxes">{{ trans('cruds.competitionGroup.fields.max_checkboxes') }}</label>
                <input class="form-control {{ $errors->has('max_checkboxes') ? 'is-invalid' : '' }}" type="text" name="max_checkboxes" id="max_checkboxes" value="{{ old('max_checkboxes', $competitionGroup->max_checkboxes) }}">
                @if($errors->has('max_checkboxes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('max_checkboxes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.max_checkboxes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('status') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="status" value="0">
                    <input class="form-check-input" type="checkbox" name="status" id="status" value="1" {{ $competitionGroup->status || old('status', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="status">{{ trans('cruds.competitionGroup.fields.status') }}</label>
                </div>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="music_group">{{ trans('cruds.competitionGroup.fields.music_group') }}</label>
                <div class="needsclick dropzone {{ $errors->has('music_group') ? 'is-invalid' : '' }}" id="music_group-dropzone">
                </div>
                @if($errors->has('music_group'))
                    <div class="invalid-feedback">
                        {{ $errors->first('music_group') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.competitionGroup.fields.music_group_helper') }}</span>
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
    Dropzone.options.musicGroupDropzone = {
    url: '{{ route('admin.competition-groups.storeMedia') }}',
    maxFilesize: 10, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10
    },
    success: function (file, response) {
      $('form').find('input[name="music_group"]').remove()
      $('form').append('<input type="hidden" name="music_group" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="music_group"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($competitionGroup) && $competitionGroup->music_group)
      var file = {!! json_encode($competitionGroup->music_group) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="music_group" value="' + file.file_name + '">')
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