@can('competition_card_first_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.competition-card-firsts.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.competitionCardFirst.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.competitionCardFirst.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-yearCategoryCompetitionCardFirsts">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.competition_participiant') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.competition_group') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionGroup.fields.coach') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.year_category') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.category') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.group_category') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.ded') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.da') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.db_plus_da') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.a_panel') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.e_panel') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.overall_score') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.place') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.evaluated') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.date') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionCardFirst.fields.time') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($competitionCardFirsts as $key => $competitionCardFirst)
                        <tr data-entry-id="{{ $competitionCardFirst->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $competitionCardFirst->id ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->competition_participiant->fullname ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->competition_group->name ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->competition_group->coach ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->year_category->name ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->category->name ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $competitionCardFirst->category->group_category ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $competitionCardFirst->category->group_category ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $competitionCardFirst->db_1 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->db_2 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->db_3 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->db_4 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->db ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->da_1 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->da_2 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->da_3 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->da_4 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->ded ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->da ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->a_1 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->a_2 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->a_4 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->a_3 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->a ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->e_1 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->e_2 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->e_3 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->e_4 ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->e ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->db_plus_da ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->a_panel ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->e_panel ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->overall_score ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->place ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $competitionCardFirst->status ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $competitionCardFirst->status ? 'checked' : '' }}>
                            </td>
                            <td>
                                <span style="display:none">{{ $competitionCardFirst->evaluated ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $competitionCardFirst->evaluated ? 'checked' : '' }}>
                            </td>
                            <td>
                                {{ $competitionCardFirst->code ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->date ?? '' }}
                            </td>
                            <td>
                                {{ $competitionCardFirst->time ?? '' }}
                            </td>
                            <td>
                                @can('competition_card_first_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.competition-card-firsts.show', $competitionCardFirst->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('competition_card_first_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.competition-card-firsts.edit', $competitionCardFirst->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('competition_card_first_delete')
                                    <form action="{{ route('admin.competition-card-firsts.destroy', $competitionCardFirst->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('competition_card_first_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.competition-card-firsts.massDestroy') }}",
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
  let table = $('.datatable-yearCategoryCompetitionCardFirsts:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection