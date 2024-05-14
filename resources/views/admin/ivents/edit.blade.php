@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.ivent.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.ivents.update", [$ivent->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('private') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="private" value="0">
                    <input class="form-check-input" type="checkbox" name="private" id="private" value="1" {{ $ivent->private || old('private', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="private">{{ trans('cruds.ivent.fields.private') }}</label>
                </div>
                @if($errors->has('private'))
                    <div class="invalid-feedback">
                        {{ $errors->first('private') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.private_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('virtual') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="virtual" value="0">
                    <input class="form-check-input" type="checkbox" name="virtual" id="virtual" value="1" {{ $ivent->virtual || old('virtual', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="virtual">{{ trans('cruds.ivent.fields.virtual') }}</label>
                </div>
                @if($errors->has('virtual'))
                    <div class="invalid-feedback">
                        {{ $errors->first('virtual') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.virtual_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date">{{ trans('cruds.ivent.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date', $ivent->date) }}">
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_to">{{ trans('cruds.ivent.fields.date_to') }}</label>
                <input class="form-control date {{ $errors->has('date_to') ? 'is-invalid' : '' }}" type="text" name="date_to" id="date_to" value="{{ old('date_to', $ivent->date_to) }}">
                @if($errors->has('date_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.date_to_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="event_name">{{ trans('cruds.ivent.fields.event_name') }}</label>
                <input class="form-control {{ $errors->has('event_name') ? 'is-invalid' : '' }}" type="text" name="event_name" id="event_name" value="{{ old('event_name', $ivent->event_name) }}">
                @if($errors->has('event_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('event_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.event_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="place">{{ trans('cruds.ivent.fields.place') }}</label>
                <input class="form-control {{ $errors->has('place') ? 'is-invalid' : '' }}" type="text" name="place" id="place" value="{{ old('place', $ivent->place) }}">
                @if($errors->has('place'))
                    <div class="invalid-feedback">
                        {{ $errors->first('place') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.place_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.ivent.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $ivent->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="deadline">{{ trans('cruds.ivent.fields.deadline') }}</label>
                <input class="form-control date {{ $errors->has('deadline') ? 'is-invalid' : '' }}" type="text" name="deadline" id="deadline" value="{{ old('deadline', $ivent->deadline) }}">
                @if($errors->has('deadline'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deadline') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.deadline_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="deadline_d_form_and_mp_3">{{ trans('cruds.ivent.fields.deadline_d_form_and_mp_3') }}</label>
                <input class="form-control date {{ $errors->has('deadline_d_form_and_mp_3') ? 'is-invalid' : '' }}" type="text" name="deadline_d_form_and_mp_3" id="deadline_d_form_and_mp_3" value="{{ old('deadline_d_form_and_mp_3', $ivent->deadline_d_form_and_mp_3) }}">
                @if($errors->has('deadline_d_form_and_mp_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('deadline_d_form_and_mp_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.deadline_d_form_and_mp_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organizer">{{ trans('cruds.ivent.fields.organizer') }}</label>
                <input class="form-control {{ $errors->has('organizer') ? 'is-invalid' : '' }}" type="text" name="organizer" id="organizer" value="{{ old('organizer', $ivent->organizer) }}">
                @if($errors->has('organizer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organizer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.organizer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact">{{ trans('cruds.ivent.fields.contact') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('contact') ? 'is-invalid' : '' }}" name="contact" id="contact">{!! old('contact', $ivent->contact) !!}</textarea>
                @if($errors->has('contact'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.contact_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.ivent.fields.notes') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{!! old('notes', $ivent->notes) !!}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('allow_volunteers_registration') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="allow_volunteers_registration" value="0">
                    <input class="form-check-input" type="checkbox" name="allow_volunteers_registration" id="allow_volunteers_registration" value="1" {{ $ivent->allow_volunteers_registration || old('allow_volunteers_registration', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="allow_volunteers_registration">{{ trans('cruds.ivent.fields.allow_volunteers_registration') }}</label>
                </div>
                @if($errors->has('allow_volunteers_registration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('allow_volunteers_registration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.allow_volunteers_registration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="volunteers_from">{{ trans('cruds.ivent.fields.volunteers_from') }}</label>
                <input class="form-control date {{ $errors->has('volunteers_from') ? 'is-invalid' : '' }}" type="text" name="volunteers_from" id="volunteers_from" value="{{ old('volunteers_from', $ivent->volunteers_from) }}">
                @if($errors->has('volunteers_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('volunteers_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.volunteers_from_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="volunteers_to">{{ trans('cruds.ivent.fields.volunteers_to') }}</label>
                <input class="form-control date {{ $errors->has('volunteers_to') ? 'is-invalid' : '' }}" type="text" name="volunteers_to" id="volunteers_to" value="{{ old('volunteers_to', $ivent->volunteers_to) }}">
                @if($errors->has('volunteers_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('volunteers_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.volunteers_to_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('allow_meal_form') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="allow_meal_form" value="0">
                    <input class="form-check-input" type="checkbox" name="allow_meal_form" id="allow_meal_form" value="1" {{ $ivent->allow_meal_form || old('allow_meal_form', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="allow_meal_form">{{ trans('cruds.ivent.fields.allow_meal_form') }}</label>
                </div>
                @if($errors->has('allow_meal_form'))
                    <div class="invalid-feedback">
                        {{ $errors->first('allow_meal_form') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.allow_meal_form_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meal_from">{{ trans('cruds.ivent.fields.meal_from') }}</label>
                <input class="form-control {{ $errors->has('meal_from') ? 'is-invalid' : '' }}" type="text" name="meal_from" id="meal_from" value="{{ old('meal_from', $ivent->meal_from) }}">
                @if($errors->has('meal_from'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meal_from') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.meal_from_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="meal_to">{{ trans('cruds.ivent.fields.meal_to') }}</label>
                <input class="form-control date {{ $errors->has('meal_to') ? 'is-invalid' : '' }}" type="text" name="meal_to" id="meal_to" value="{{ old('meal_to', $ivent->meal_to) }}">
                @if($errors->has('meal_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('meal_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.meal_to_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('media_registration') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="media_registration" value="0">
                    <input class="form-check-input" type="checkbox" name="media_registration" id="media_registration" value="1" {{ $ivent->media_registration || old('media_registration', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="media_registration">{{ trans('cruds.ivent.fields.media_registration') }}</label>
                </div>
                @if($errors->has('media_registration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('media_registration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.media_registration_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('travel_form') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="travel_form" value="0">
                    <input class="form-check-input" type="checkbox" name="travel_form" id="travel_form" value="1" {{ $ivent->travel_form || old('travel_form', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="travel_form">{{ trans('cruds.ivent.fields.travel_form') }}</label>
                </div>
                @if($errors->has('travel_form'))
                    <div class="invalid-feedback">
                        {{ $errors->first('travel_form') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.travel_form_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="docs">{{ trans('cruds.ivent.fields.docs') }}</label>
                <div class="needsclick dropzone {{ $errors->has('docs') ? 'is-invalid' : '' }}" id="docs-dropzone">
                </div>
                @if($errors->has('docs'))
                    <div class="invalid-feedback">
                        {{ $errors->first('docs') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.docs_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('hotel_form') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="hotel_form" value="0">
                    <input class="form-check-input" type="checkbox" name="hotel_form" id="hotel_form" value="1" {{ $ivent->hotel_form || old('hotel_form', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="hotel_form">{{ trans('cruds.ivent.fields.hotel_form') }}</label>
                </div>
                @if($errors->has('hotel_form'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hotel_form') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.hotel_form_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('visa_form') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="visa_form" value="0">
                    <input class="form-check-input" type="checkbox" name="visa_form" id="visa_form" value="1" {{ $ivent->visa_form || old('visa_form', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="visa_form">{{ trans('cruds.ivent.fields.visa_form') }}</label>
                </div>
                @if($errors->has('visa_form'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visa_form') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.ivent.fields.visa_form_helper') }}</span>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.ivents.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $ivent->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    var uploadedDocsMap = {}
Dropzone.options.docsDropzone = {
    url: '{{ route('admin.ivents.storeMedia') }}',
    maxFilesize: 2, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="docs[]" value="' + response.name + '">')
      uploadedDocsMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedDocsMap[file.name]
      }
      $('form').find('input[name="docs[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($ivent) && $ivent->docs)
          var files =
            {!! json_encode($ivent->docs) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="docs[]" value="' + file.file_name + '">')
            }
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