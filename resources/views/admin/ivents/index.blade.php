@extends('layouts.admin')
@section('content')
@can('ivent_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.ivents.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.ivent.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'Ivent', 'route' => 'admin.ivents.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.ivent.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Ivent">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.ivent.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.ivent.fields.private') }}
                        </th>
                        <th>
                            {{ trans('cruds.ivent.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.ivent.fields.date_to') }}
                        </th>
                        <th>
                            {{ trans('cruds.ivent.fields.event_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.ivent.fields.country') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ivents as $key => $ivent)
                        <tr data-entry-id="{{ $ivent->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $ivent->id ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $ivent->private ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $ivent->private ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $ivent->date ?? '' }}
                            </td>
                            <td>
                                {{ $ivent->date_to ?? '' }}
                            </td>
                            <td>
                                {{ $ivent->event_name ?? '' }}
                            </td>
                            <td>
                                {{ $ivent->country ?? '' }}
                            </td>
                            <td>
                                @can('ivent_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.ivents.show', $ivent->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('ivent_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.ivents.edit', $ivent->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('ivent_delete')
                                    <form action="{{ route('admin.ivents.destroy', $ivent->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('ivent_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.ivents.massDestroy') }}",
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
  let table = $('.datatable-Ivent:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection