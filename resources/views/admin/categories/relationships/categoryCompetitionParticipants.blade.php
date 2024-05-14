@can('competition_participant_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.competition-participants.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.competitionParticipant.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.competitionParticipant.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-categoryCompetitionParticipants">
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
                            {{ trans('cruds.competitionParticipant.fields.year_of_birth') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.coaches') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.age_group') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.organization') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.category') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.type') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.year_of_birth') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.app_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.app_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.app_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.app_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.app_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.app_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.category.fields.app_in_final') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.link_to_the_archive') }}
                        </th>
                        <th>
                            {{ trans('cruds.competitionParticipant.fields.max_checkboxes') }}
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
                                {{ $competitionParticipant->year_of_birth ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->coaches ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\CompetitionParticipant::AGE_GROUP_SELECT[$competitionParticipant->age_group] ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->organization ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->city ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->category->name ?? '' }}
                            </td>
                            <td>
                                {{ $competitionParticipant->category->description ?? '' }}
                            </td>
                            <td>
                                @if($competitionParticipant->category)
                                    {{ $competitionParticipant->category::TYPE_SELECT[$competitionParticipant->category->type] ?? '' }}
                                @endif
                            </td>
                            <td>
                                {{ $competitionParticipant->category->year_of_birth ?? '' }}
                            </td>
                            <td>
                                @if($competitionParticipant->category)
                                    {{ $competitionParticipant->category::APP_1_SELECT[$competitionParticipant->category->app_1] ?? '' }}
                                @endif
                            </td>
                            <td>
                                @if($competitionParticipant->category)
                                    {{ $competitionParticipant->category::APP_2_SELECT[$competitionParticipant->category->app_2] ?? '' }}
                                @endif
                            </td>
                            <td>
                                @if($competitionParticipant->category)
                                    {{ $competitionParticipant->category::APP_3_SELECT[$competitionParticipant->category->app_3] ?? '' }}
                                @endif
                            </td>
                            <td>
                                @if($competitionParticipant->category)
                                    {{ $competitionParticipant->category::APP_4_SELECT[$competitionParticipant->category->app_4] ?? '' }}
                                @endif
                            </td>
                            <td>
                                @if($competitionParticipant->category)
                                    {{ $competitionParticipant->category::APP_5_SELECT[$competitionParticipant->category->app_5] ?? '' }}
                                @endif
                            </td>
                            <td>
                                @if($competitionParticipant->category)
                                    {{ $competitionParticipant->category::APP_6_SELECT[$competitionParticipant->category->app_6] ?? '' }}
                                @endif
                            </td>
                            <td>
                                @if($competitionParticipant->category)
                                    {{ $competitionParticipant->category::APP_IN_FINAL_SELECT[$competitionParticipant->category->app_in_final] ?? '' }}
                                @endif
                            </td>
                            <td>
                                {{ $competitionParticipant->link_to_the_archive ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\CompetitionParticipant::MAX_CHECKBOXES_SELECT[$competitionParticipant->max_checkboxes] ?? '' }}
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
  let table = $('.datatable-categoryCompetitionParticipants:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection