@extends('layouts.admin')
@section('content')
@can('type_of_competition_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.type-of-competitions.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.typeOfCompetition.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.typeOfCompetition.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-TypeOfCompetition">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.icon') }}
                        </th>
                        <th>
                            {{ trans('cruds.typeOfCompetition.fields.icon_2') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($typeOfCompetitions as $key => $typeOfCompetition)
                        <tr data-entry-id="{{ $typeOfCompetition->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $typeOfCompetition->id ?? '' }}
                            </td>
                            <td>
                                {{ $typeOfCompetition->name ?? '' }}
                            </td>
                            <td>
                                @if($typeOfCompetition->icon)
                                    <a href="{{ $typeOfCompetition->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $typeOfCompetition->icon->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $typeOfCompetition->icon_2 ?? '' }}
                            </td>
                            <td>
                                @can('type_of_competition_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.type-of-competitions.show', $typeOfCompetition->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('type_of_competition_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.type-of-competitions.edit', $typeOfCompetition->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('type_of_competition_delete')
                                    <form action="{{ route('admin.type-of-competitions.destroy', $typeOfCompetition->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('type_of_competition_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.type-of-competitions.massDestroy') }}",
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
  let table = $('.datatable-TypeOfCompetition:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection