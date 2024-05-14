@extends('layouts.admin')
@section('content')
@can('competition_participant_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.competition-participants.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.competitionParticipant.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'CompetitionParticipant', 'route' => 'admin.competition-participants.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.competitionParticipant.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CompetitionParticipant">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.fullname') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.organization') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.coach') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.link_to_the_archive') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($competitionParticipants as $key => $competitionParticipant)
                        <tr data-entry-id="{{ $competitionParticipant->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $competitionParticipant->id ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->fullname ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->organization ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->coach ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->city ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->link_to_the_archive ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $competitionParticipant->status ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $competitionParticipant->status ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('competition_participant_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.competition-participants.show', $competitionParticipant->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('competition_participant_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.competition-participants.edit', $competitionParticipant->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('competition_participant_delete')
                                    <form action="{{ route('admin.competition-participants.destroy', $competitionParticipant->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('competition_participant_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.competition-participants.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-CompetitionParticipant:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection