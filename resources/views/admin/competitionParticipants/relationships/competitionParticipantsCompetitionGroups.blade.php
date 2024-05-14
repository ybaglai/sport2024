@can('competition_group_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.competition-groups.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.competitionGroup.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.competitionGroup.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-competitionParticipantsCompetitionGroups">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.coach') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.competition_participants') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($competitionGroups as $key => $competitionGroup)
                        <tr data-entry-id="{{ $competitionGroup->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $competitionGroup->id ?? '' }}
                            </td>
                            <td>
                                {{ $competitionGroup->name ?? '' }}
                            </td>
                            <td>
                                {{ $competitionGroup->coach ?? '' }}
                            </td>
                            <td>
                                @foreach($competitionGroup->competition_participants as $key => $item)
                                    <span class="badge badge-info">{{ $item->fullname }}</span>
                                @endforeach
                            </td>
                            <td>
                                @can('competition_group_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.competition-groups.show', $competitionGroup->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('competition_group_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.competition-groups.edit', $competitionGroup->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('competition_group_delete')
                                    <form action="{{ route('admin.competition-groups.destroy', $competitionGroup->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('competition_group_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.competition-groups.massDestroy') }}",
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
  let table = $('.datatable-competitionParticipantsCompetitionGroups:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection